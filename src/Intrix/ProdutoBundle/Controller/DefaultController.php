<?php

namespace Intrix\ProdutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProdutoBundle:Default:index.html.twig', array('name' => $name));
    }
}
