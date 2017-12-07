<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Menu;

class MenuFixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{
		$menus = array(
			array("name" => "Acceuil", "order" => "1", "url" => "home"),
			array("name" => "Chercher une activité", "order" => "2", "url" => "home"),
			array("name" => "Ajouter une activité", "order" => "3", "url" => "add_activity"),
			array("name" => "A propos", "order" => "4", "url" => "home"),
		);
				
		foreach($menus as $m)
		{
			$menu = new Menu();
			$menu->setName($m["name"]);
			$menu->setOrderBy($m["order"]);
			$menu->setUrl($m["url"]);
			$manager->persist($menu);
		}
		
		$manager->flush();		
	}
	
//	public function getOrder()
//	{
//		return 0;
//	}
}