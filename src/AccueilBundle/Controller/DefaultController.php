<?php

namespace AccueilBundle\Controller;

namespace AccueilBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ConnexionBundle\Entity\Contact;
use ConnexionBundle\Entity\Annonces;
use AccueilBundle\Form\Type\AnnonceType;
use AccueilBundle\Form\Type\RegistrationType;
use AccueilBundle\Form\Type\EnquiryType;

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
    
    public function locationAction(Request $request)
    {
        $annonce = new Annonces();
        $form = $this->createForm(new AnnonceType(),$annonce);
        if($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            if($form->isValid()){
                
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($annonce);
                $em->flush();
                return $this->redirect($this->generateUrl('location_homepage'));
                
            }
            
        }
        return $this->render('AccueilBundle:Default:location.html.twig',array('form'=> $form->createView()));
    }
    
    
    public function contactAction(Request $request) {
        $contact = new Contact();
        $form = $this->createForm(new EnquiryType(), $contact);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            
            
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($contact);
                $em->flush();
                return $this->redirect($this->generateUrl('contact_homepage'));
            }
        }
        
                return $this->render('AccueilBundle:Default:contact.html.twig', array('form' => $form->createView()));

    }
    
     public function serviceAction()
    {
        return $this->render('AccueilBundle:Default:services.html.twig');
    }
   
}
