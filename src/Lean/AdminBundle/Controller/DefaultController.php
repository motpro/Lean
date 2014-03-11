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

        $account = $this->getDoctrine()->getRepository('LeanAdminBundle:Ucmember')->find( $result->getUserId() );

        return $this->render('LeanAdminBundle:Default:query.html.twig' , array('contact'    =>$result , 
                                                                               'list'       =>$list ,
                                                                               'account'    =>$account ,
        ));
    }
}
