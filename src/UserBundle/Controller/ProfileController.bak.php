<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Form\JeuxFormType;
use UserBundle\Form\EditJeuxFormType;

class ProfileController extends BaseController
{
   public function jeuxAction(Request $request)
   {
	    $em = $this->getDoctrine()->getManager();
	    $user = $this->getUser();
	    $jeux = $user->getJeux();
		/*$jeux3ds = array();
		$jeuxWiiU = array();
	    foreach ($jeux as $jeu)
		{
			if($jeu->getConsole() == '3ds')
			{
				$jeux3ds[] = $jeu;
			} else 
			{
				$jeuxWiiU[] = $jeu;
			}
		}*/
	    $formEdit = $this->createForm(EditJeuxFormType::class, $user);
	    $form3ds = $this->createForm(JeuxFormType::class, $user, array('console' => '3ds'));
	    $formWiiU = $this->createForm(JeuxFormType::class, $user, array('console' => 'Wii U'));
		
		$form3ds->handleRequest($request);
			
		if ($form3ds->isValid())
		{
			$em->flush();
			return $this->redirectToRoute('user_profil_jeux');
		}
		
		$formWiiU->handleRequest($request);
		
		if ($formWiiU->isValid())
		{
			$em->flush();
			return $this->redirectToRoute('user_profil_jeux');
		}

		
	   return $this->render('UserBundle:Profile:jeux.html.twig', array(
	   'form3ds' => $form3ds->createView(), 'formWiiU' => $formWiiU->createView(), 'formEdit' => $formEdit->createView()/*'jeux3ds' => $jeux3ds, 'jeuxWiiU' => $jeuxWiiU*/));
   }
    
}
