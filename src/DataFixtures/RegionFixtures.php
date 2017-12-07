<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Region;

class RegionFixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{
		$names = array(
			"Auvergne-Rhône-Alpes",
			"Bourgogne-Franche-Comté",
			"Bretagne",
			"Centre-Val de Loire",
			"Corse",
			"Grand Est",
			"Hauts-de-France",
			"Île-de-France",
			"Normandie",
			"Nouvelle-Aquitaine",
			"Occitanie",
			"Pays de la Loire",
			"Provence-Alpes-Côte d'Azur"
		);
		
		foreach($names as $name)
		{
			$region = new Region();
			$region->setName($name);
			$manager->persist($region);
		}
		
		$manager->flush();
	}
	
//	public function getOrder()
//	{
//		return 1;
//	}
}