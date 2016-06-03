<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use CoreBundle\Entity\Jeu;

class LoadJeu extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
	  
    $jeux = array(
      array('Animal Crossing New Leaf', 'Nintendo', '3ds', 'Simulation', '...', new \DateTime('06/14/2013'), 4),
      array('Fantasy Life', 'Level 5', '3ds', 'RPG', '...', new \DateTime('09/26/2014'), 4),
      array('Final Fantasy Explorers', 'Square Enix', '3ds', 'Action RPG', '...', new \DateTime('01/29/2016'), 4),
      array('Kid Icarus Uprising', 'Nintendo', '3ds', 'Shooter', '...', new \DateTime('03/23/2012'), 4),
      array('Luigi\'s Mansion 2', 'Nintendo', '3ds', 'Aventure', '...', new \DateTime('03/28/2013'), 4),
	  array('Mario Kart 7', 'Nintendo', '3ds', 'Course', '...', new \DateTime('12/02/2012'), 8),
	  array('Monster Hunter 4 Ultimate', 'Capcom', '3ds', 'Action', '...', new \DateTime('02/13/2015'), 4),
	  array('Pokémon Saphir Alpha', 'Nintendo', '3ds', 'Jeu de Rôle', '...', new \DateTime('11/28/2014'), 2),
	  array('Pokémon X', 'Nintendo', '3ds', 'Jeu de Rôle', '...', new \DateTime('10/12/2013'), 2),
	  array('Super Smash Bros. for 3ds', 'Nintendo', '3ds', 'Combat', '...', new \DateTime('10/03/2014'), 4),
	  array('Theatrhythm Final Fantasy : Curtain Call', 'Square Enix', '3ds', 'Rythme', '...', new \DateTime('09/16/2014'), 2),
	  array('The Legend of Zelda : Tri Force Heroes', 'Nintendo', '3ds', 'Aventure', '...', new \DateTime('10/23/2015'), 3),
	  array('Mario Kart 8', 'Nintendo', 'Wii U', 'Course', '...', new \DateTime('05/30/2014'), 12),
	  array('Monster Hunter 3 Ultimate', 'Capcom', 'Wii U', 'Action', '...', new \DateTime('03/22/2013'), 4),
	  array('Splatoon', 'Nintendo', 'Wii U', 'TPS', '...', new \DateTime('05/29/2015'), 8),
	  array('Super Smash Bros. for Wii U', 'Nintendo', 'Wii U', 'Combat', '...', new \DateTime('11/28/2014'), 4)
    );
	
	$i=0;
    foreach ($jeux as $jeu) {
      $nouveauJeu = new Jeu();
      $nouveauJeu->setNom($jeu[0]);
	  $nouveauJeu->setEditeur($jeu[1]);
	  $nouveauJeu->setConsole($jeu[2]);
	  $nouveauJeu->setGenre($jeu[3]);
	  $nouveauJeu->setDescription($jeu[4]);
	  $nouveauJeu->setDateSortie($jeu[5]);
	  $nouveauJeu->setNombreJoueurs($jeu[6]);
	  $nouveauJeu->setImage($this->getReference("image-$i"));
      $manager->persist($nouveauJeu);
	  $i++;
    }
	
    $manager->flush();
  }
  
  public function getOrder() 
  {
	  return 1;
  }
}
