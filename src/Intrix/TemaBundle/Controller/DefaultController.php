<?php

namespace Intrix\TemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TemaBundle:Default:index.html.twig', array('name' => $name));
    }
}
