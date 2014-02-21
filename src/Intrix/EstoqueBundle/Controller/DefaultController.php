<?php

namespace Intrix\EstoqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EstoqueBundle:Default:index.html.twig', array('name' => $name));
    }
}
