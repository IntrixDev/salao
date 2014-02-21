<?php

namespace Intrix\ProfissionalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProfissionalBundle:Default:index.html.twig', array('name' => $name));
    }
}
