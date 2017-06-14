<?php

namespace UserBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use FOS\UserBundle\Command\CreateUserCommand as BaseCreateUserCommand;

class CreateUserCommand extends BaseCreateUserCommand
{
    protected function configure()
    {
        $this
            ->setName('fos:user:create')
            ->setDescription('Create a user.')
            ->setDefinition(array(
                new InputArgument('username', InputArgument::REQUIRED, 'The username'),
                new InputArgument('email', InputArgument::REQUIRED, 'The email'),
                new InputArgument('password', InputArgument::REQUIRED, 'The password'),
                new InputArgument('firstName', InputArgument::REQUIRED, 'The first name'),
                new InputArgument('lastName', InputArgument::REQUIRED, 'The last name'),
                new InputArgument('phoneNumber', InputArgument::REQUIRED, 'The phone number'),
                new InputOption('super-admin', null, InputOption::VALUE_NONE, 'Set the user as super admin'),
                new InputOption('inactive', null, InputOption::VALUE_NONE, 'Set the user as inactive'),
            ))
            ->setHelp(<<<'EOT'
The <info>fos:user:create</info> command creates a user:

  <info>php %command.full_name% matthieu</info>

This interactive shell will ask you for an email and then a password.

You can alternatively specify the email and password as the second and third arguments:

  <info>php %command.full_name% matthieu matthieu@example.com mypassword</info>

You can create a super admin via the super-admin flag:

  <info>php %command.full_name% admin --super-admin</info>

You can create an inactive user (will not be able to log in):

  <info>php %command.full_name% thibault --inactive</info>

EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username = $input->getArgument('username');
        $email = $input->getArgument('email');
        $password = $input->getArgument('password');
        $firstName = $input->getArgument('firstName');
        $lastName = $input->getArgument('lastName');
        $phoneNumber = $input->getArgument('phoneNumber');
        $inactive = $input->getOption('inactive');
        $superadmin = $input->getOption('super-admin');

        $manipulator = $this->getContainer()->get('user.util.user_manipulator');
        $manipulator->create($username, 
                             $password, 
                             $email,
                             $firstName,
                             $lastName,
                             $phoneNumber,
                             !$inactive, 
                             $superadmin);

        $output->writeln(sprintf('Created user <comment>%s</comment>', $username));
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $questions = array();

        if (!$input->getArgument('username')) {
            $question = new Question('Please choose a username:');
            $question->setValidator(function ($username) {
                if (empty($username)) {
                    throw new \Exception('Username can not be empty');
                }

                return $username;
            });
            $questions['username'] = $question;
        }

        if (!$input->getArgument('email')) {
            $question = new Question('Please choose an email:');
            $question->setValidator(function ($email) {
                if (empty($email)) {
                    throw new \Exception('Email can not be empty');
                }

                return $email;
            });
            $questions['email'] = $question;
        }

        if (!$input->getArgument('password')) {
            $question = new Question('Please choose a password:');
            $question->setValidator(function ($password) {
                if (empty($password)) {
                    throw new \Exception('Password can not be empty');
                }

                return $password;
            });
            $question->setHidden(true);
            $questions['password'] = $question;
        }

        if (!$input->getArgument('firstName')) {
            $question = new Question('Please enter first name:');
            $question->setValidator(function ($firstName) {
                if (empty($firstName)) {
                    throw new \Exception('First name can not be empty');
                }

                return $firstName;
            });
            $questions['firstName'] = $question;
        }

        if (!$input->getArgument('lastName')) {
            $question = new Question('Please enter last name:');
            $question->setValidator(function ($lastName) {
                if (empty($lastName)) {
                    throw new \Exception('Last name can not be empty');
                }

                return $lastName;
            });
            $questions['lastName'] = $question;
        }

        if (!$input->getArgument('phoneNumber')) {
            $question = new Question('Please enter phone number:');
            $question->setValidator(function ($phoneNumber) {
                if (empty($phoneNumber)) {
                    throw new \Exception('Phone number can not be empty');
                }

                return $phoneNumber;
            });
            $questions['phoneNumber'] = $question;
        }

        foreach ($questions as $name => $question) {
            $answer = $this->getHelper('question')->ask($input, $output, $question);
            $input->setArgument($name, $answer);
        }
    }
}
