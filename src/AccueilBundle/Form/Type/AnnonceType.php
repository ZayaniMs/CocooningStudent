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

use ConnexionBundle\Entity\Annonces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class AnnonceType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('titre')
                 ->add('date','date',array('widget' => 'choice', 
                                             
                                            'format' => 'd/M/y', 
                                            'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
                                            'pattern' => "{{ day }}/{{ month }}/{{ year }}",
                                            ))
                 ->add('prix')
                 ->add('adresse')
                 ->add('codepostal')
                 ->add('description','textarea')
                 ->add('Publiez','submit');
        
    }

    public function getName()
    {
        return 'annonce';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'ConnexionBundle\Entity\Annonces',
        ]);
    }

}