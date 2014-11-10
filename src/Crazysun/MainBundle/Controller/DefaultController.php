<?php

namespace Crazysun\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();

        return $this->render('CrazysunMainBundle:Default:index.html.twig', array(
            'user' => $user,
        ));
    }
}
