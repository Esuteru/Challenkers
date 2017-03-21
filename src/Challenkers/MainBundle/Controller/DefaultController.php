<?php

namespace Challenkers\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // Récupération des serveurs
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ChallenkersMainBundle:Serveur');

        $listeServeurs = $repository->findAll();
        return $this->render(
            'ChallenkersMainBundle:Default:index.html.twig',
            array('serveurs' => $listeServeurs)
        );
    }
    
  
}
