<?php

namespace Crazysun\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CrazysunMainBundle:Default:index.html.twig');
    }
}
