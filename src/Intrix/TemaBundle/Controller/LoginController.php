<?php

namespace Intrix\TemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('TemaBundle:Login:index.html.twig');
    }
}
