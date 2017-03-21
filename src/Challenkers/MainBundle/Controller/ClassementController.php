<?php

// src/Challenkers/MainBundle/Controller/ClassementController.php

namespace Challenkers\MainBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class ClassementController extends Controller
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
          array('points' => 'desc' ),
          10,
          0
          );
    
    return $this->render(
      'ChallenkersMainBundle:Classement:index.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres)
    );
  }

    public function levelAction($idGuilde)
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
          array('level' => 'desc' ),
          10,
          0
          );
    
    return $this->render(
      'ChallenkersMainBundle:Classement:level.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres)
    );
  }
  
  public function rankSAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        
        $listeMembres = $repository->findRankS($idGuilde);
        $rank = "S";
    return $this->render(
      'ChallenkersMainBundle:Classement:rank.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'rank' => $rank)
    );
  }
  
    public function rankAAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        
        $listeMembres = $repository->findRankA($idGuilde);
        $rank = "A";
    return $this->render(
      'ChallenkersMainBundle:Classement:rank.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'rank' => $rank)
    );
  }
  
    public function rankBAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        
        $listeMembres = $repository->findRankB($idGuilde);
        $rank = "B";
    return $this->render(
      'ChallenkersMainBundle:Classement:rank.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'rank' => $rank)
    );
  }
  
    public function rankCAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        
        $listeMembres = $repository->findRankC($idGuilde);
        $rank = "C";
    return $this->render(
      'ChallenkersMainBundle:Classement:rank.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'rank' => $rank)
    );
  }

    public function classeArcherAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        $classe = "Archer";
        $listeMembres = $repository->findBy(
          array('classe' => 'Archer', 'idGuilde' => $idGuilde),
          array('points' => 'desc')
          );
          
        return $this->render(
      'ChallenkersMainBundle:Classement:class.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'classe' => $classe)
    );
  }  
  
    public function classeChevalierAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        $classe = "Chevalier";
        $listeMembres = $repository->findBy(
          array('classe' => 'Chevalier', 'idGuilde' => $idGuilde),
          array('points' => 'desc')
          );
          
        return $this->render(
      'ChallenkersMainBundle:Classement:class.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'classe' => $classe)
    );
  }  
  
    public function classeHealAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        $classe = "Heal";
        $listeMembres = $repository->findBy(
          array('classe' => 'Heal', 'idGuilde' => $idGuilde),
          array('points' => 'desc')
          );
          
        return $this->render(
      'ChallenkersMainBundle:Classement:class.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'classe' => $classe)
    );
  }  
  
    public function classeMageAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        $classe = "Mage";
        $listeMembres = $repository->findBy(
          array('classe' => 'Mage', 'idGuilde' => $idGuilde),
          array('points' => 'desc')
          );
          
        return $this->render(
      'ChallenkersMainBundle:Classement:class.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'classe' => $classe)
    );
  }  
  
    public function classeTankAction($idGuilde)
  {
    
        $guilde = $this->getDoctrine()
            ->getRepository('ChallenkersMainBundle:Guilde')
            ->find($idGuilde);
        
        $nom = $guilde->getNomGuilde();
        
        // Récupération des membres
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Membres');
        
        $classe = "Tank";
        $listeMembres = $repository->findBy(
          array('classe' => 'Tank', 'idGuilde' => $idGuilde),
          array('points' => 'desc')
          );
          
        return $this->render(
      'ChallenkersMainBundle:Classement:class.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres, 'classe' => $classe)
    );
  }  
  
    public function classeAutreAction($idGuilde)
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
          array('classe' => '?', 'idGuilde' => $idGuilde),
          array('points' => 'desc')
          );
          
        return $this->render(
      'ChallenkersMainBundle:Classement:class.html.twig',
      array('idGuilde'  => $idGuilde, 'nomGuilde' => $nom, 'membres' => $listeMembres)
    );
  }  
  
  
}