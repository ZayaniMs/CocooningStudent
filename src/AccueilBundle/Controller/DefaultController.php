<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AccueilBundle:Default:index.html.twig');
    }
    
    public function localisationAction()
    {
        return $this->render('AccueilBundle:Default:localisation.html.twig');
    }
    
    
    public function contactAction()
    {
        return $this->render('AccueilBundle:Default:contact.html.twig');
    }
}
