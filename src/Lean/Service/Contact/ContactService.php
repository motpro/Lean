<?php
namespace Lean\Service\Contact;

use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class ContactService
{

	protected $em;

    public function __construct( \Doctrine\Bundle\DoctrineBundle\Registry $doctrine)
    {
    	$this->em = $doctrine->getEntityManager();
    }


    public function find($data,$type)
    {

    	if( trim( $type ) === '' )

    		return false;

    	$rsm = new ResultSetMapping();

    	if( $type === 'username')
    	{
			$query = $this->em->createNativeQuery('SELECT * FROM m_users u  JOIN m_userprofiles_profiles p ON p.id = u.id WHERE u.username like "%?%"', $rsm);
			$query->setParameter(1, $data);

			return $query->getResult();
    	}
    }
}