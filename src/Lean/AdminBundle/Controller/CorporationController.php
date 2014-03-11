<?php

namespace Lean\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CorporationController extends Controller
{

    public function indexAction( $page = 1 )
    {
    	$repo = $this->getDoctrine()->getRepository('LeanAdminBundle:Corporation');

    	$list = $repo->getCorporations( $page );

    	return $this->render('LeanAdminBundle:Corporation:index.html.twig' , array('list'=>$list));
    }

    public function queryAction( $corporationId = 1)
    {	
    	
    	$detail = $this->getDoctrine()->getRepository('LeanAdminBundle:Corporation')->findOneById( $corporationId);

    	return $this->render('LeanAdminBundle:Corporation:query.html.twig' , array('detail' => $detail));
    }

}
