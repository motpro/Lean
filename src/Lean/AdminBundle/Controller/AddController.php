<?php

namespace Lean\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lean\AdminBundle\Entity\User;
use Lean\AdminBundle\Form\Type\UserType;

class AddController extends Controller
{
    public function indexAction( $type = "none")
    {

    	if( $type == 'none')
			return $this->render('LeanAdminBundle:add:index.html.twig');


		if( $type === 'user')
		{

			$user = new User();
			$form = $this->createForm( new UserType() , $user);

			return $this->render('LeanAdminBundle:add:index.html.twig' , 
				array(  'type' => $type , 
						'form' => $form->createView() 
					 ) 
			);
		}
    }

}
