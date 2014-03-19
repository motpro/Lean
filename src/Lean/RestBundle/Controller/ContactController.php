<?php

namespace Lean\RestBundle\Controller;
use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\Controller\FOSRestController;

class ContactController extends FosRestController
{
	public function searchAction( /*$key , $value , $limit , $startFrom*/ )
	{

		$request = Request::createFromGlobals();

		$key = $request->request->get('key');
		$value = $request->request->get('value');
		$limit = 2;
		$startFrom = 0;


		if( in_array( $key , array('id')))
		{
			$result = $this->getDoctrine()
			               ->getRepository('LeanAdminBundle:Contact')
			               ->createQueryBuilder('e')
			               ->select('e')
			               ->where( ' e.id = :id')
			               ->setParameter('id' , $value)
			               ->setMaxResults( $limit )
			               ->setFirstResult( $startFrom )

			               ->getQuery()
			               ->getResult( \Doctrine\ORM\Query::HYDRATE_ARRAY);

		}else if( in_array( $key, array('username' , 'name' , 'email' , 'job' , 'phone' , 'mobile' )) )
		{
			$qb = $this->getDoctrine()->getRepository('LeanAdminBundle:Contact')->createQueryBuilder('e');

			$result = $qb->select('e')
			             ->where( $qb->expr()->like( "e.{$key}",":{$key}") )
			             ->setParameter( $key , "%{$value}%")
			             ->getQuery()
			             ->getResult( \Doctrine\ORM\Query::HYDRATE_ARRAY);
		}else if( in_array( $key, array('company')))
		{
			$qb = $this->getDoctrine()->getRepository('LeanAdminBundle:Corporation')->createQueryBuilder('c');

			$result = $qb->select('c')
			             ->where( $qb->expr()->like('c.name' , ":{$key}"))
			             ->setParameter( $key , "%{$value}%")
			             ->setFirstResult( $startFrom )
			             ->setMaxResults( $limit )
			             ->getQuery()
			             ->getResult( \Doctrine\ORM\Query::HYDRATE_ARRAY);
		}
		return new Response( json_encode( $result)  , 200);
	} 
}