<?php

namespace ConnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AccueilBundle\Entity\Users;
use AccueilBundle\Entity\UsersRepository;
use ConnexionBundle\Form\Type\RegistrationType;

class DefaultController extends Controller {

    public function loginAction(Request $request) {
        $session = $this->getRequest()->getSession();

        if ($request->getMethod() == 'POST') {
            $session->clear();
            $mail = $request->get('email');
            $password = $request->get('mdp');
            $remenber = $request->get('remenber');
            $locataire = $request->get('locataire');

            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('AccueilBundle:Users');

            $userLoc = $repository->getLoc();


            $user = $repository->findOneBy(array('email' => $mail, 'mdp' => $password));

            if ($user && $userLoc) {
                $identifiant = $this->getDoctrine()->getRepository("AccueilBundle:Users")->findAll();
                return $this->redirect($this->generateUrl('annonce_homepage'));
            }

            return $this->render('ConnexionBundle:Default:loginLocataire.html.twig', array('name' => 'erreur de login. Veillez vous conntez en tant que locataire',));
        }
        return $this->render('ConnexionBundle:Default:connexion.html.twig');
    }

    public function connexionLocAction(Request $request) {

        $session = $this->getRequest()->getSession();

        if ($request->getMethod() == 'POST') {
            $session->clear();
            $mail = $request->get('email');
            $password = $request->get('mdp');
            $remenber = $request->get('remenber');
            //$locataire = $request->get('locataire');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('AccueilBundle:Users');

            $userLoc = $repository->getLoc($mail);







            var_dump($userLoc);


            $user = $repository->findOneBy(array('email' => $mail, 'mdp' => $password));



            if ($user && $userLoc["locataire"] == 'true') {
                $identifiant = $this->getDoctrine()->getRepository("AccueilBundle:Users")->findAll();
                return $this->redirect($this->generateUrl('annonce_homepage'));
            }

            return $this->render('ConnexionBundle:Default:loginLocataire.html.twig', array('erreur' => 'erreure de login. Veillez vous connectez entant que locataire'));
        }

        return $this->render('ConnexionBundle:Default:loginLocataire.html.twig');
    }

    public function connexionProprietaireAction(Request $request) {

        $session = $this->getRequest()->getSession();

        if ($request->getMethod() == 'POST') {
            $session->clear();
            $mail = $request->get('email');
            $password = $request->get('mdp');
            $remenber = $request->get('remenber');
            //$locataire = $request->get('locataire');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('AccueilBundle:Users');

            $userLoc = $repository->getLoc($mail);







            var_dump($userLoc);


            $user = $repository->findOneBy(array('email' => $mail, 'mdp' => $password));



            if ($user && ! $userLoc["locataire"] == 'true') {
                $identifiant = $this->getDoctrine()->getRepository("AccueilBundle:Users")->findAll();
                return $this->redirect($this->generateUrl('annonce_homepage'));
            }

            return $this->render('ConnexionBundle:Default:loginProprietaire.html.twig', array('erreur' => 'erreure de login. Veillez vous connectez avec votre compte proprietaire'));
        }

        return $this->render('ConnexionBundle:Default:loginProprietaire.html.twig');
    }

    public function signupAction(Request $request) {

        $user = new Users();
        $form = $this->createForm(new RegistrationType(), $user);
        if ($request->getMethod() == 'POST') {
            /*
              $username = $request->get('username');
              $password = $request->get('password');
              $nom = $request->get('nom');
              $email = $request->get('email');
              $telephone = $request->get('telephone');


              $user = new Users();
              $user->setUsername($username);
              $user->setPassword($password);
              $user->setNom($nom);
              $user->setEmail($email);
              $user->setTelephone($telephone); */
            $form->handleRequest($request);
            //$form->bindRequest($request);
            //$identifiant = $this->getDoctrine()->getRepository("ConnexionBundle:Users")->findAll();

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
                $em->flush();
                return $this->render('ConnexionBundle:Default:connexion.html.twig');
            }

            //reste a faire rajouter l'adresse de la personne 
        }



        return $this->render('ConnexionBundle:Default:Signup.html.twig', array('form' => $form->createView()));
    }

    public function listContactAction() {

        $identifiant = $this->getDoctrine()->getRepository("ConnexionBundle:Infos")->findAll();
        return $this->render('ConnexionBundle:Default:listContact.html.twig', array('identifiant' => $identifiant));
    }

}
