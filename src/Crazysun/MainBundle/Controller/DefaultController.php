<?php

namespace Crazysun\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CrazysunMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
