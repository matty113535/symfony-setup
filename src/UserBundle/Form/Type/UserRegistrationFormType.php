<?php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use UserBundle\Entity\User;

class UserRegistrationFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('profilePicture', 'sonata_media_type', array(
            //     'provider' => 'sonata.media.provider.image',
            //     'context'  => 'profile_picture'
            //     )
            // )
            ->add('email', null, array(
                'label' => 'Email Address'
                )
            )
            ->add('firstName', null, array(
                'label' => 'First Name'
                )
            )
            ->add('lastName', null, array(
                'label' => 'Last Name'
                )
            )
            ->add('phoneNumber', null, array(
                'label' => 'Phone Number'
                )
            )
            ->remove('username')
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'cascade_validation' => true,
            'validation_groups' => array('Registration', 'Default')
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    public function getBlockPrefix()
    {
        return 'user_registration_form';
    }

    public function getName()
    {
       return $this->getBlockPrefix();
    }

}
