<?php

namespace Seveinfo\FrontCarteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Seveinfo\FrontCarteBundle\Entity\Client;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SeveinfoFrontCarteBundle:Default:index.html.twig', array('name' => $name));
    }
    public function dateAction()
    {
    	$laDate = date("j F, Y");
    	$lheure = date("H:i");
    	return $this->render('SeveinfoFrontCarteBundle:Default:date.html.twig', array('laDate' => $laDate,'lheure' => $lheure));
    }
    public function voirClientAction($id)
    {
        // Récupérer le Repository au travers de Doctrine
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('SeveinfoFrontCarteBundle:client');

        //Récupération de la clé via l'id
        $client = $repository->find($id);

        //Gestion du cas où l'id ne correspond à rien

        if($client === null){
            throw $this->createNotFoundException('client[id='.$id.'] inexistant');
        }

        //retour pour affichage

        return $this->render('SeveinfoFrontCarteBundle:Default:client.html.twig', array('client' => $client));
   }
   
   public function listeClientAction(){

        //récupérer le répository
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('SeveinfoFrontCarteBundle:client');
        //récupération du client lié à l'id
        $clients = $repository->findAll();

        //Retour pour affichage
        return $this->render('SeveinfoFrontCarteBundle:Default:listeclient.html.twig', 
            array('clients' => $clients));
   }
   public function voirMontantClientAction($id){

        //Récupérer le repository
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('SeveinfoFrontCarteBundle:Montant');
        //récup donnée
        $montants = $repository->findbyClient($id);

        return $this->render('SeveinfoFrontCarteBundle:Default:voirmontantclient.html.twig',
         array('montants' => $montants));
   }
   public function premiereRechercheClientAction($partNom)
   {

    // récupérer le repository au travers de Doctrine
      $repositoryClient = $this->getDoctrine()
                               ->getManager()
                               ->getRepository('SeveinfoFrontCarteBundle:Client');

      $listeClients = $repositoryClient->premiereRechercheNom($partNom);

    // retour pour affichage

      return $this->render('SeveinfoFrontCarteBundle:Default:listingclients.html.twig',
       array('clients' => $listeClients));
   }
   public function createClientAction(){
    //création d'un nouvel objet client
    $client = new Client();

    //création du formbuilder
    $formbuilder = $this->createFormBuilder($client);

    //insertion des champs qui devront apparaître sur le formulaire
    $formbuilder
        ->add('nom', 'text')
        ->add('prenom', 'text')
        ->add('mail', 'text');

    //génération du form
    $form = $formbuilder->getForm();

    //affichage du formulaire
    return $this->render('SeveinfoFrontCarteBundle:Default:formulaire.html.twig',
     array('form' => $form->createView()));
   }
    
}
