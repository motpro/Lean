<?php

namespace Lean\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction( $type)
    {

    	$type = 'get' . ucfirst( $type);

    	$user = $this->container->get('security.context')->getToken()->getUser();

    	return new Response( $user->$type() , 200);
        //return $this->render('LeanLoginBundle:Default:index.html.twig', array('name' => $name));
    }

}
