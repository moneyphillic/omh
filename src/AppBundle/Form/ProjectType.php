<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('background_img', FileType::class, array(
            'required' => true,
            'data_class' => null
        ))->add('portfolio_img', FileType::class, array(
            'required' => true,
            'data_class' => null
        ))->add('thumbnail_img', FileType::class, array(
            'required' => true,
            'data_class' => null
        ))->add('name', TextType::class, array(
            'required' => true
        ))->add('category', TextType::class, array(
            'required' => true
        ))->add('description', TextareaType::class, array(
            'required' => true
        ))->add('client', TextType::class, array(
            'required' => true
        ))->add('year', TextType::class, array(
            'required' => true
        ))->add('types', TextType::class, array(
            'required' => true
        ))->add('agency', TextType::class, array(
            'required' => true
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Project',
            'csrf_protection' => false
        ));
    }
}
