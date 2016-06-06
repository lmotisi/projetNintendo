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
	  'bundles/core/images/jaquettes/3ds/animal_crossing_new_leaf.jpg' => "Animal Crossing New Leaf",
	  'bundles/core/images/jaquettes/3ds/fantasy_life.jpg' => "Fantasy Life",
	  'bundles/core/images/jaquettes/3ds/final_fantasy_explorers.jpg' => "Final Fantasy Explorers",
	  'bundles/core/images/jaquettes/3ds/kid_icarus_uprising.jpg' => "Kid Icarus Uprising",
	  'bundles/core/images/jaquettes/3ds/luigi_mansion.jpg' => "Luigi's Mansion 2",
	  'bundles/core/images/jaquettes/3ds/mario_kart_7.png'=> "Mario Kart 7",
	  'bundles/core/images/jaquettes/3ds/monster_hunter_4u.jpg' => "Monster Hunter 4 Ultimate",
	  'bundles/core/images/jaquettes/3ds/pokemon_saphir.jpg' => "Pokémon Saphir Alpha",
	  'bundles/core/images/jaquettes/3ds/pokemon_x.jpg' => "Pokémon X",
	  'bundles/core/images/jaquettes/3ds/super_smash_bros.jpg' => "Super Smash Bros. 3ds",
	  'bundles/core/images/jaquettes/3ds/theatrhythm_curtain_call.jpg' => "Theatrhythm Curtain Call",
	  'bundles/core/images/jaquettes/3ds/zelda_tri_force_heroes.jpg' => "Zelda Tri Force Heroes",
	  'bundles/core/images/jaquettes/Wii U/mario_kart_8.jpg' => "Mario Kart 8",
	  'bundles/core/images/jaquettes/Wii U/monster_hunter_3u.jpg' => "Monster Hunter 3 Ultimate",
	  'bundles/core/images/jaquettes/Wii U/splatoon.jpg' => "Splatoon",
	  'bundles/core/images/jaquettes/Wii U/super_smash_bros_u.jpg' => "Super Smash Bros. WiiU"
	);
	
	$i=0;
    foreach ($images as $image => $alt) {
	  $nouvelleImage = new Image();
	  $nouvelleImage->setUrl($image);
	  $nouvelleImage->setAlt($alt);
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