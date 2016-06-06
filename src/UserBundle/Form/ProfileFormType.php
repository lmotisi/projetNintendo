<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ProfileFormType extends AbstractType
{
	
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateNaissance');
		$builder->add('sexe');
		$builder->add('codeAmi');
		$builder->add('nnid');
		$builder->add('skype');
		$builder->add('description');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

	public function getBlockPrefix()
    {
        return 'user_profile';
    }
}