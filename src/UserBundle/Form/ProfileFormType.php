<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;



class ProfileFormType extends AbstractType
{
	
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateNaissance', BirthdayType::class);
		$builder->add('sexe', ChoiceType::class, array(
			'choices' => array ('Féminin' => 'feminin', 'Masculin' => 'masculin'), 
			'expanded' => true, 
			'multiple' => false
		));
		$builder->add('codeAmi', IntegerType::class);
		$builder->add('nnid', TextType::class);
		$builder->add('skype', TextType::class);
		$builder->add('description', TextareaType::class);
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