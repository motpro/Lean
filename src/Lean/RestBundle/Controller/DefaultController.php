<?php

namespace Lean\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LeanRestBundle:Default:index.html.twig', array('name' => $name));
    }
}
