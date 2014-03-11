<?php

namespace Lean\RestBundle\Controller;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\Controller\FOSRestController;

class UserController extends FosRestController
{
	public function contactAction( $id )
	{
        
        $contact = $this->getDoctrine()->getRepository('LeanAdminBundle:Contact')->findOneById( $id);

        return new Response( $contact , 200);
	}
}