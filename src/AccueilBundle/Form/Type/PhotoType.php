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

namespace AccueilBundle\Form\Type;

use AccueilBundle\Entity\Annonces;
use AccueilBundle\Entity\Photo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PhotoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('chemin')
                ->add('pcouv')
                ->add('annoncesannonces');
    }

    /**
     * @return Photo
     */
    public function getName() {
        return 'photo';
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults([
            'data_class' => 'AccueilBundle\Entity\Photo',
        ]);
    }

}
