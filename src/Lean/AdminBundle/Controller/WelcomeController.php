<?php

namespace Lean\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
    	return $this->render('LeanAdminBundle:Welcome:index.html.twig');
    }

}
