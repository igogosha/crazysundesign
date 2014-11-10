<?php

namespace Crazysun\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crazysun\MainBundle\Entity\Country;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $user = $this->get('security.context')->getToken()->getUser();

        $countries = $this->getDoctrine()
            ->getRepository('CrazysunMainBundle:Country')
            ->findAll();

        return $this->render('CrazysunMainBundle:Default:index.html.twig', array(
            'user' => $user,
            'countriesNumber' => count($countries),
        ));
    }
}
