<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {	
		$em = $this->getDoctrine()->getManager();
		
		$listeJeux3ds = $em->getRepository('CoreBundle:Jeu')->findByConsole('3ds');
		$listeJeuxWiiU = $em->getRepository('CoreBundle:Jeu')->findByConsole('Wii U');
        return $this->render('CoreBundle:Core:index.html.twig', array (
		'listeJeux3ds' => $listeJeux3ds,
		'listeJeuxWiiU' => $listeJeuxWiiU
		));
    }
	
	public function ficheJeuAction($console, $id) 
	{
		$em = $this->getDoctrine()->getManager();
		
		$jeu = $em->getRepository('CoreBundle:Jeu')->find($id);
		if ($jeu != null) 
		{
			return $this->render('CoreBundle:Core:ficheJeu.html.twig', array(
			'jeu' => $jeu
			));
		} else 
		{
			$url = $this->get('router')->generate('core_accueil');
			return new RedirectResponse($url);
		}
	}
}
