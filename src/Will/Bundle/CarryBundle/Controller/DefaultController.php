<?php

namespace Will\Bundle\CarryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('WillCarryBundle:Default:index.html.twig', array('name' => $name));
    }
}
