<?php

// src/Challenkers/MainBundle/Controller/AdvertController.php

namespace Challenkers\MainBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('ChallenkersMainBundle:Advert:index.html.twig');
    return new Response($content);
  }
}