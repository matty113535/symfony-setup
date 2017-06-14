from __future__ import with_statement
from fabric.api import run, cd, env
from fabric.contrib.console import prompt, confirm
from fabric.utils import puts
import time
import getpass

env.hosts = ['139.59.182.6']
env.user = prompt('Server Username? (leave blank for current user)')
if len(env.user) is 0:
    env.user = getpass.getuser()

env.environment = prompt('Enviroment? (leave blank for staging)')
if len(env.environment) is 0 or env.environment not in ['staging', 'production']:
    env.environment = 'staging'

# Branch to deploy -> this can be use only in staging.
# We always keep the master branch in production
env.branch = 'master'
if env.environment == 'staging':
    env.branch = prompt('Branch? (leave blank for master)')
    if len(env.environment) is 0:
        env.branch = 'master'

env.home_dir = "/home/%(environment)s" % env
env.dir = "%(home_dir)s/welocum" % env

env.repo_url = "git@github.com:daniel-stanciulescu/welocum.git"
env.release = time.strftime('%Y%m%d%H%M%S')

if env.environment == 'production':
    env.docker_cli = "docker-compose -f %(environment)s.yml run --rm symfony_prod" % env
else:
    env.docker_cli = "docker-compose -f %(environment)s.yml run --rm symfony_stage" % env

# env.php_cli = "php-5.6-cli"
env.symfony_cli = "%(docker_cli)s bin/console" % env

env.db_name = "welocum"
env.db_host = "139.59.182.6"
env.db_user = "symfony"
env.db_backup_path = "%(home_dir)s/db_backups" % env
env.current_db_backup_file = "%(db_backup_path)s/%(release)s.gz" % env

env.files_backup_path = "%(home_dir)s/files_backups" % env
env.current_backup_archive = "%(files_backup_path)s/%(release)s.tar.gz" % env


def stage_pull():
    run("git fetch origin %(branch)s" % env)
    run("git checkout %(branch)s" % env)
    run("git pull")

def resolve_dependencies():
    run("%(docker_cli)s composer install" % env)


def clear_cache():
    run("%(symfony_cli)s cache:clear" % env)
    # run("%(symfony_cli)s cache:clear --env=prod" % env)


def backup_db():
    puts("Backup db")

    env.db_password = getpass.getpass(
        "Enter your database password for %(db_user)s:" % env
    )

    run("mysqldump -h %(db_host)s --user=%(db_user)s --password=%(db_password)s \
        --default-character-set=utf8 %(db_name)s | \
        gzip > %(current_db_backup_file)s" % env)
    run("ln -f -s %(current_db_backup_file)s %(db_backup_path)s/live.gz" % env)

    puts("Backup script completed")
    puts(
        "Your backups has been created in %(db_backup_path)s directory"
        % env
    )


def update_db():
    run("%(symfony_cli)s doctrine:schema:update --force" % env)


def backup_files():
    run("tar czvf %(current_backup_archive)s %(dir)s/web" % env)
    run(
        "ln -f -s %(current_backup_archive)s %(files_backup_path)s/live.tar.gz"
        % env
    )

def install_assets():
    run("%(symfony_cli)s assetic:dump" % env)

def fix_media_context():
    run("%(symfony_cli)s sonata:media:fix-media-context" % env)

def deploy():
    with cd("%(dir)s" % env):
        stage_pull()
        if confirm("Resolve dependencies?"):
            resolve_dependencies()
        if confirm("Clear symfony cache?"):
            clear_cache()
        if confirm("Backup database?"):
            backup_db()
        if confirm("Backup files?"):
            backup_files()
        if confirm("Update database schema?"):
            update_db()
        if confirm("Install assets?"):
            install_assets()
        if confirm("Fix media content?"):
            fix_media_context()


def rollback():
    run(
        "tar xzvf %(files_backup_path)s/live.tar.gz -C %(dir)s/web"
        % env
    )

    env.db_password = getpass.getpass(
        "Enter your database password for %(db_user)s:" % env
    )

    run("zcat %(db_backup_path)s/live.gz | mysql --user=%(db_user)s \
        --password=%(db_password)s %(db_name)s" % env)
