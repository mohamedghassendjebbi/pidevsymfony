<?php
/**
 * Created by PhpStorm.
 * User: ghassen
 * Date: 13/05/2020
 * Time: 03:53
 */

namespace LocalisationBundle\Controller;


use LocalisationBundle\Entity\Localisation;
use LocalisationBundle\Form\LocalisationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Date;

class LocalisationController extends  Controller
{
    public function afficherAction()
    {
        return $this->render('@Localisation/loc/map.html.twig');
    }
    public function createAction(Request $request,$adresse_debut,$adresse_fin,$prix){

        $localisation=new Localisation();
        $form=$this->createForm(LocalisationType::class,$localisation);
        $form['adresseFin']->setData($adresse_fin);
        $form['prix']->setData(floatval($prix)*0.600);
        $form['idC']->setData(2);
        $form['idAction']->setData(20);
        $form['adresseDebut']->setData($adresse_debut);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($localisation);
            $em->flush();
            //return $this->redirectToRoute("esprit_patients_homepage");

        }
        return $this->render('@Localisation/loc/form.html.twig',array('form'=>$form->createView()));
    }
    public function new2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $localisation= new Localisation();
        $localisation->setAdresseDebut($request->get('adresseDebut'));
        $localisation->setAdresseFin($request->get('adresseFin'));


        $localisation->setPrix($request->get('prix'));
        $localisation->setDateLoc(new \DateTime('now'));
        $localisation->setIdC($request->get('idC'));
        $localisation->setIdAction($request->get('idAction'));
        $em->persist($localisation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($localisation);
        return new JsonResponse($formatted);
    }

}