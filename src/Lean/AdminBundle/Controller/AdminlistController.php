<?php

namespace Lean\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminlistController extends Controller
{
    public function indexAction()
    {
    	$list = $this->getDoctrine()->getRepository('LeanLoginBundle:User')->findAll();

    	return $this->render('LeanAdminBundle:Adminlist:index.html.twig' , array( 'list' => $list ));
    }

}
