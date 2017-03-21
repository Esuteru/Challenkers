<?php

// src/Challenkers/MainBundle/Controller/AdvertController.php

namespace Challenkers\MainBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class MembresController extends Controller
{
  public function indexAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');

        $listeMembres = $repository->findBy(
          array('idGuilde' => $idGuilde),
          array('pseudo' => 'asc' )
          );
    
    return $this->render(
      'ChallenkersMainBundle:Membres:index.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres)
    );
  }
  
      
  public function allMembersAction()
  {
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');

        $listeMembres = $repository->findAll();
    
    return $this->render(
      'ChallenkersMainBundle:Membres:allMembers.html.twig',
      array('membres' => $listeMembres)
    );
  } 
 

  
}