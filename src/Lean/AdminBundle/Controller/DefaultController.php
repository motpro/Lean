<?php

namespace Lean\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction( $page = 1)
    {
        $entities = $this->getDoctrine()
                         ->getRepository('LeanAdminBundle:Contact')
                         ->getContacts( $page );

        return $this->render('LeanAdminBundle:Default:index.html.twig' , array('users'=>$entities));
    }

    public function queryAction( $id)
    {
        $result = $this->getDoctrine()->getRepository('LeanAdminBundle:Contact')->findOneById( $id);

        $list = $this->getDoctrine()->getRepository('LeanAdminBundle:Communication')->findByContactId( $id);

        if( $result->getUserId() > 0)
        {
            $account = $this->getDoctrine()->getRepository('LeanAdminBundle:User')->find( $result->getUserId() );

            $webprofile = $this->getDoctrine()->getRepository('LeanAdminBundle:Profile')->find( $result->getUserId() );        
        }else
        {
            $account = array();
            $webprofile = array();
        }

        return $this->render('LeanAdminBundle:Default:query.html.twig' , array('contact'    =>$result , 
                                                                               'list'       =>$list ,
                                                                               'account'    =>$account ,
                                                                               'webprofile' =>$webprofile ,
        ));
    }

    public function communicationAction()
    {
        $list = $this->getDoctrine()->getRepository('LeanAdminBundle:Communication')->findByMasterId( 1);
    }
}
