<?php

namespace Lean\RestBundle\Controller;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\Controller\FOSRestController;

class UserController extends FosRestController
{

	public function addAction( Request $request)
	{

		$post = $request->get('username');

		$user=$this->getDoctrine()->getRepository('LeanAdminBundle:User')->findOneByUsername( trim( $post) );

		if( $user)
		{
			$profile = $this->getDoctrine()->getRepository('LeanAdminBundle:Profile')->findOneById( $user->getId() );

			return new Response( json_encode( array( 'id' => $user->getId() , 'email' => $user->getEmail() , 'username' => $user->getUsername() , 'profile' => $profile)) , 200);
		}
		else 
			return new Response( json_encode( array('response' , 'OK , it\'s not used')) , 200);
	}
}