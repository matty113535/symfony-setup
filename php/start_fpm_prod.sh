#!/bin/bash

crontab /cronfile
cron -f &
php-fpm --allow-to-run-as-root
