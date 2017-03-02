<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    
     public function serviceAction()
    {
        return $this->render('AccueilBundle:Default:services.html.twig');
    }
   
}
