<?php

namespace Lean\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lean\AdminBundle\Entity\User;
use Lean\AdminBundle\Entity\Contact;
use Lean\AdminBundle\Entity\Corporation;

use Lean\AdminBundle\Form\Type\UserType;
use Lean\AdminBundle\Form\Type\ContactType;
use Lean\AdminBundle\Form\Type\CorporationType;

class AddController extends Controller
{
    public function indexAction( $type = "none")
    {

    	if( $type == 'none')
			return $this->render('LeanAdminBundle:add:index.html.twig');


		if( 'user' === $type )
		{

			$user = new User();
			$form = $this->createForm( new UserType() , $user);

			return $this->render('LeanAdminBundle:add:index.html.twig' , 
				array(  'type' => $type , 
						'form' => $form->createView() 
					 ) 
			);
		}else if( 'contact' === $type )
		{
			$contact = new Contact();

			$form = $this->createForm( new ContactType() , $contact);
			return $this->render('LeanAdminBundle:add:index.html.twig' , 
				array(  'type' => $type , 
						'form' => $form->createView() 
					 ) 
			);
		}else if( 'company' === $type )
		{
			$corporation = new Corporation();
			$form = $this->createForm( new CorporationType() , $corporation);
			return $this->render('LeanAdminBundle:add:index.html.twig' , 
				array(  'type' => $type , 
						'form' => $form->createView() 
					 ) 
			);
		}
    }
}
