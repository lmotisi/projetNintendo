<?php 

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use CoreBundle\Repository\JeuRepository;


class JeuxFormType extends AbstractType
{
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$console = $options['console'];
		$builder
			->add('jeux', EntityType::class, array(
			'label' => 'Jeux '.$console.':',
  		    'class' => 'CoreBundle:Jeu',
		    'query_builder' => function (JeuRepository $er) use ($options)
			{ 
               return $er->findJeux($options['console']);
		    },
		    'choice_label' => 'nom'))
		    ->add('Ajouter', SubmitType::class);
		
		
	}
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'UserBundle\Entity\User',
			'console' => null
		));
	}
	
}
