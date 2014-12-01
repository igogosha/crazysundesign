<?php

namespace Crazysun\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crazysun\MainBundle\Entity\Country;
use Symfony\Component\HttpFoundation\Request;
use Crazysun\MainBundle\Form\AdType;

class DefaultController extends Controller
{

    public function indexAction() {
        return $this->render('CrazysunMainBundle:Default:index.html.twig');
    }

    public function adminAction()
    {

        $user = $this->get('security.context')->getToken()->getUser();

        $countries = $this->getDoctrine()
            ->getRepository('CrazysunMainBundle:Country')
            ->findAll();

        return $this->render('CrazysunMainBundle:Default:admin.html.twig', array(
            'user' => $user,
            'countriesNumber' => count($countries),
        ));
    }

    public function teasersAction() {

        return $this->render('CrazysunMainBundle:Default:teasers.html.twig', array(
            'user' => 'teasers test'
        ));
    }

    public function teasersNewAction(Request $request) {
        $adForm = $this->createForm(new AdType());

        return $this->render('CrazysunMainBundle:Default:teasersNew.html.twig', array(
            'form' => $adForm
        ));
    }
}
