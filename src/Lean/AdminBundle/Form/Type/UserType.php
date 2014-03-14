<?php

namespace Lean\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
	public function buildForm( FormBuilderInterface $builder , array $options)
	{
		$builder->add('name' , 'text')
			    ->add('username' , 'text')
			    ->add('email' , 'text')
			    ->add('password' , 'text')
			    ->add('save', 'submit');
	}

	public function getName()
	{
		return 'user';
	}
}