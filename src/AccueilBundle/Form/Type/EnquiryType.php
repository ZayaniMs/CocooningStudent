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

use ConnexionBundle\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class EnquiryType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('nom')
                 ->add('email', 'email')
                 ->add('subject')
                 ->add('message', 'textarea')
                 
                ->add('Envoyer','submit',array(
                    'attr'=>array(
                        'class'=>'btn btn-skin'
                    )
                ));
        
    }

    public function getName()
    {
        return 'contact';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AccueilBundle\Entity\Contact',
        ]);
    }

}