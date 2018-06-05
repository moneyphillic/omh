<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('background_img', FileType::class, array(
            'required' => true,
            'data_class' => null
        ))->add('headline', TextType::class, array(
            'required' => true,
        ))->add('text', TextType::class, array(
            'required' => true,
        ))->add('hobbies', TextType::class, array(
            'required' => true,
        ))->add('social_channels', TextType::class, array(
            'required' => false,
        ))->add('clients', TextType::class, array(
            'required' => true,
        ))->add('studios', TextType::class, array(
            'required' => true,
        ))->add('tools', TextType::class, array(
            'required' => true,
        ))->add('mail', TextType::class, array(
            'required' => true,
        ))->add('facebook', TextType::class, array(
            'required' => true,
        ))->add('instagram', TextType::class, array(
            'required' => true,
        ))->add('linkedin', TextType::class, array(
            'required' => true,
        ))
        ->add('phone', TextType::class, array(
            'required' => true,
        ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profile',
            'csrf_protection' => false
        ));
    }

}
