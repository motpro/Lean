<?php

namespace Lean\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
	public function buildForm( FormBuilderInterface $builder , array $options)
	{
		$builder->add('id' , 'text')
			    ->add('tag' , 'text')
			    ->add('master_id' , 'text')
			    ->add('user_id' , 'text')
			    ->add('username', 'text')
			    ->add('name', 'text')
			    ->add('companyId', 'text')
			    ->add('job', 'text')
			    ->add('age', 'text')
			    ->add('gender' , 'text')
			    ->add('qq' , 'text')
			    ->add('officePhone' , 'text')
			    ->add('officeFax' , 'text')
			    ->add('privatePhone' , 'text')
			    ->add('mobile' , 'text')
			    ->add('description' , 'text')
			    ->add('save' , 'submit');
	}

	public function getName()
	{
		return 'contact';
	}
}