<?php

namespace UserBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('enabled')
            ->add('lastLogin')
            ->add('phoneNumber')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('email', null, array())
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
            ->add('enabled', null, array(
                'editable' => true
                )
            )
            ->add('lastLogin')
            ->add('roles', null, array(
                'template' => ':admin:list_array.html.twig'
                )
            )
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                ),
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username')
            ->add('usernameCanonical')
            ->add('email')
            ->add('emailCanonical')
            ->add('enabled')
            ->add('salt')
            ->add('password')
            ->add('lastLogin')
            ->add('confirmationToken')
            ->add('passwordRequestedAt')
            ->add('roles')
            ->add('id')
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $subject = $this->getSubject();

        $showMapper
            ->add('enabled')
            ->add('email')
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
            ->add('roles', null, array(
                'template' => ':admin:show_array.html.twig'
                )
            )
            ->add('lastLogin')
        ;
        if($subject->getPasswordRequestedAt()) {
            $showMapper->add('passwordRequestedAt');
        }

        if($subject->getConfirmationToken()) {
            $showMapper->add('confirmationToken');
        }
    }
}
