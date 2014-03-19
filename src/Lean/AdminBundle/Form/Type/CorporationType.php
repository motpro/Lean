<?php

namespace Lean\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CorporationType extends AbstractType
{
	public function buildForm( FormBuilderInterface $builder , array $options)
	{
		$builder->add('id' , 'text')
				->add('name' , 'text')
				->add('industry' , 'text')
				->add('phone' , 'text')
				->add('fax' , 'text')
				->add('email' , 'text')
				->add('address' , 'text')
				->add('postid' , 'text')
				->add('turnover' , 'text')
				->add('employee' , 'text')
				->add('weburl' , 'text')
				->add('more' , 'text')
				->add('createdUserid' , 'text')
			    ->add('save' , 'submit');
	}

	public function getName()
	{
		return 'corporation';
	}
}