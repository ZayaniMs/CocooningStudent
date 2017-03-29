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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AccueilBundle\Form\ImageType;

class AnnoncesType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('titre')
                ->add('date', 'date', array('widget' => 'choice',
                    'format' => 'd/M/y',
                    'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
                    'pattern' => "{{ day }}/{{ month }}/{{ year }}",
                ))
                ->add('prix')
                ->add('adresse','text',array(
                                        'attr'=>array(
                                                'class'=>'adresse' //ajout d'une class au widget
                                         )))
                ->add('codepostal')
                ->add('ville')
                ->add('description', 'textarea')
                ->add('image',new ImageType())
                ->add('Publiez', 'submit',array(
                    'attr'=>array('class'=>'btn btn-skin')
                ));
    }

    public function getName() {
        return 'annonce';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults([
            'data_class' => 'AccueilBundle\Entity\Annonces',
        ]);
    }

}
