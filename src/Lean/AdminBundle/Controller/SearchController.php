<?php

namespace Lean\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SearchController extends Controller
{
	public function indexAction()
	{
		return $this->render('LeanAdminBundle:Search:index.html.twig');
	}

	public function resultAction()
	{

		$request = $this->getRequest();

		if( $request->request->get('search'))
		{
			$string = $request->request->get('text');

			$type  = $request->request->get('type');

			$result = $this->get('model.contact')->find( $string , $type);

			return $this->render('LeanAdminBundle:Search:result.html.twig' , array(
									'result' => $result , 
									'string' => $string , 
									'type'   => $type , 
								 )
				);			
		}
		else
		{
			return $this->render('LeanAdminBundle:Search:result.html.twig');
		}

	}
}
