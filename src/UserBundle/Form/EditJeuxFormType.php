<?php 

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use CoreBundle\Repository\JeuRepository;
use CoreBundle\Form\JeuType;


class EditJeuxFormType extends AbstractType
{
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		
		$builder
			->add('jeux', CollectionType::class, array(
			  'entry_type' => JeuType::class,
			  'allow_delete' => true
			))
		    ->add('save', SubmitType::class);
		
		
	}
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'UserBundle\Entity\User',
		));
	}
	
}