<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
	
	public function ficheJeuAction($console, $nom) 
	{
		return ("");
		
	}
}
