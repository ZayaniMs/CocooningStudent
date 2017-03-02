<?php

namespace ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use ConnexionBundle\Entity\Users;
use ConnexionBundle\Entity\Infos;

class DefaultController extends Controller {

    public function loginAction(Request $request) {
        $session = $this->getRequest()->getSession();

        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');
            $remenber = $request->get('remenber');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('ConnexionBundle:Infos');

            $user = $repository->findBy(array('username' => $username, 'password' => $password));

            if ($user) {
                $identifiant = $this->getDoctrine()->getRepository("ConnexionBundle:Infos")->findAll();    
                return $this->render('AccueilBundle:Default:services.html.twig',array('identifiant' => $identifiant));
            }
            return $this->render('ConnexionBundle:Default:connexion.html.twig', array('name' => 'erreur de login'));
        }
        return $this->render('ConnexionBundle:Default:connexion.html.twig');
    }

    public function signupAction(Request $request) {

        if ($request->getMethod() == 'POST') {

            $username = $request->get('username');
            $password = $request->get('password');
            $nom = $request->get('nom');
            $email = $request->get('email');
            $telephone = $request->get('telephone');


            $user = new Infos();
            $user->setUsername($username);
            $user->setPassword($password);
            $user->setNom($nom);
            $user->setEmail($email);
            $user->setTelephone($telephone);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();

            $identifiant = $this->getDoctrine()->getRepository("ConnexionBundle:Users")->findAll();

            if ($user) {
                return $this->render('ConnexionBundle:Default:connexion.html.twig');
            } else {
                
            }

            //reste a faire rajouter l'adresse de la personne 
        }

        return $this->render('ConnexionBundle:Default:signup.html.twig');
    }
    
    
    public function listContactAction() {

        $identifiant = $this->getDoctrine()->getRepository("ConnexionBundle:Infos")->findAll();
        return $this->render('ConnexionBundle:Default:listContact.html.twig', array('identifiant' => $identifiant));
    }


}
