<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use CoreBundle\Entity\Image;

class LoadImage extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
	  
	$images = array(
	  array('bundles/core/images/jaquettes/3ds/animal_crossing_new_leaf.jpg', "Animal Crossing New Leaf"),
	  array('bundles/core/images/jaquettes/3ds/fantasy_life.jpg', "Fantasy Life"),
	  array('bundles/core/images/jaquettes/3ds/final_fantasy_explorers.jpg', "Final Fantasy Explorers"),
	  array('bundles/core/images/jaquettes/3ds/kid_icarus_uprising.jpg', "Kid Icarus Uprising"),
	  array('bundles/core/images/jaquettes/3ds/luigi_mansion.jpg', "Luigi's Mansion 2"),
	  array('bundles/core/images/jaquettes/3ds/mario_kart_7.png', "Mario Kart 7"),
	  array('bundles/core/images/jaquettes/3ds/monster_hunter_4u.jpg', "Monster Hunter 4 Ultimate"),
	  array('bundles/core/images/jaquettes/3ds/pokemon_saphir.jpg', "Pokémon Saphir Alpha"),
	  array('bundles/core/images/jaquettes/3ds/pokemon_x.jpg', "Pokémon X"),
	  array('bundles/core/images/jaquettes/3ds/super_smash_bros.jpg', "Super Smash Bros. 3ds"),
	  array('bundles/core/images/jaquettes/3ds/theatrhythm_curtain_call.jpg', "Theatrhythm Curtain Call"),
	  array('bundles/core/images/jaquettes/3ds/zelda_tri_force_heroes.jpg', "Zelda Tri Force Heroes"),
	  array('bundles/core/images/jaquettes/Wii U/mario_kart_8.jpg', "Mario Kart 8"),
	  array('bundles/core/images/jaquettes/Wii U/monster_hunter_3u.jpg', "Monster Hunter 3 Ultimate"),
	  array('bundles/core/images/jaquettes/Wii U/splatoon.jpg', "Splatoon"),
	  array('bundles/core/images/jaquettes/Wii U/super_smash_bros_u.jpg', "Super Smash Bros. WiiU"),
	);
	
	$i=0;
    foreach ($images as $image) {
	  $nouvelleImage = new Image();
	  $nouvelleImage->setUrl($image[0]);
	  $nouvelleImage->setAlt($image[1]);
      $manager->persist($nouvelleImage);
	  $this->addReference("image-$i", $nouvelleImage);
	  $i++;
    }
	
	$manager->flush();
  }
  
  public function getOrder() 
  {
	  return 0;
  }
}