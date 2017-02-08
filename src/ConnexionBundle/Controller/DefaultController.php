<?php

namespace ConnexionBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function connexionAction()
    {
        return $this->render('ConnexionBundle:Default:connexion.html.twig');
    }
    
    
    public function SignupAction()
    {
        return $this->render('ConnexionBundle:Default:Signup.html.twig');
    }
    
}
