<?php

namespace UserBundle\EventListener;

use AppBundle\EventListener\EmailNotificationListener as BaseEmailNotificationListener;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RegistrationListener extends BaseEmailNotificationListener implements EventSubscriberInterface {

    const REGISTRATION_SUCCESS = ":admin:mail/registration_new_user.email.twig";

    private $adminEmailAddress;

    public function __construct($adminEmailAddress)
    {
        $this->adminEmailAddress = $adminEmailAddress;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_INITIALIZE => 'onRegistrationInitialize',
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        );
    }

    public function onRegistrationInitialize($event) {
        $user = $event->getUser();
        $request = $event->getRequest();

        switch($request->get('_route')) {
            case 'register_user':
                $user->addRole('ROLE_CLIENT');
            break;
        }
    }

    public function onRegistrationSuccess($event) {
        $form = $event->getForm();
        $data = $form->getData();

        $context = array('user' => $data);
        $this->sendEmailMessage(
            self::REGISTRATION_SUCCESS, 
            $context, 
            $this->adminEmailAddress
        );
    }
}
