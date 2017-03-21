<?php

// src/Challenkers/MainBundle/Controller/AdvertController.php

namespace Challenkers\MainBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class GuildesController extends Controller
{
  public function indexAction($idServeur)
  {
    $serveur = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Serveur')
            ->find($idServeur);
    //Récupération des guildes du serveur
    $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Guilde');

    $listeGuildes = $repository->findBy(
          array('idServeur' => $idServeur));
          
    return $this->render(
      'ChallenkersMainBundle:Guildes:index.html.twig',
      array('idServeur'  => $idServeur, 'guildes' => $listeGuildes, 'serveur' => $serveur)
    );
  }

  public function infoAction($idGuilde)
  {
    $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Guilde');

    $guilde = $repository->find($idGuilde);
    
    $membres = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
                   
    $listeMembres = $membres->findBy(
          array('idGuilde' => $idGuilde));
          
    


    return $this->render(
      'ChallenkersMainBundle:Guildes:info.html.twig',
      array('idGuilde'  => $idGuilde, 'guilde' => $guilde, 'membres' => $listeMembres)
    );
  } 
  
}