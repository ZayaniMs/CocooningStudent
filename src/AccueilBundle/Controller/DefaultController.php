<?php

namespace AccueilBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AccueilBundle\Entity\Contact;
use AccueilBundle\Entity\Photo;

use AccueilBundle\Entity\Annonces;
use AccueilBundle\Form\Type\AnnoncesType;
use AccueilBundle\Form\Type\RegistrationType;
use AccueilBundle\Form\Type\EnquiryType;
use AccueilBundle\Form\Type\PhotoType;




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
        //$photo = new Photo();
        $form = $this->createForm(new AnnoncesType(),$annonce);
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
    
    public function annonceAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $annonces = $em->getRepository('AccueilBundle:Annonces')->findAll();
        
        
        return $this->render('AccueilBundle:Default:annonce.html.twig',array('annonce'=>$annonces));
    }
    
    public function VoirAnnonceAction($id)
    {
        
        
        $em = $this->getDoctrine();
        
        $annonces = $em->getRepository('AccueilBundle:Annonces')->find($id);
        
        
        
        
        
        //$annonces = array_map('current',$annonce);
        
        return $this->render('AccueilBundle:Default:voirannonce.html.twig',array('annonce'=>$annonces,$id));
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
