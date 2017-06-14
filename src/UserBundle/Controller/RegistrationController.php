<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Controller\RegistrationController as BaseRegistrationController;
use FOS\UserBundle\Model\UserInterface;

class RegistrationController extends BaseRegistrationController
{
    public function registerUserAction(Request $request)
    {
        $user = $this->getUser();
        
        if (is_object($user) && $user instanceof UserInterface) {
        	$request->getSession()
                    ->getFlashBag()
                    ->add('error', 'You already have an account');
            return $this->redirectToRoute('user_profile');
        }

        $formFactory = $this->get('fos_user.registration.form.factory');
        $formFactory->setType('UserBundle\Form\Type\UserRegistrationFormType');
        return $this->registerAction($request);
    }
}
