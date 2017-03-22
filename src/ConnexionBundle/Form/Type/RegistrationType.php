<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationType
 *
 * @author jacques
 */
namespace ConnexionBundle\Form\Type;

use AccueilBundle\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('mdp', 'password')
                ->add('email', 'email')
                ->add('save','submit')
                
        ;
    }

    public function getName()
    {
        return 'registration';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AccueilBundle\Entity\Users',
        ]);
    }

}