<?php

namespace ApisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApisBundle:Default:index.html.twig', array('name' => $name));
    }
}
