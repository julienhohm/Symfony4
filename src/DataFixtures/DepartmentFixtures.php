<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Department;
use App\Entity\Region;

class DepartmentFixtures extends Fixture implements DependentFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$departments = array(
	  		array('region' => '1','code' => '01','name' => 'Ain'),
		  	array('region' => '7','code' => '02','name' => 'Aisne'),
		  	array('region' => '1','code' => '03','name' => 'Allier'),
		  	array('region' => '13','code' => '04','name' => 'Alpes-de-Haute-Provence'),
		  	array('region' => '13','code' => '05','name' => 'Hautes-Alpes'),
		  	array('region' => '13','code' => '06','name' => 'Alpes-Maritimes'),
		  	array('region' => '1','code' => '07','name' => 'Ardèche'),
		  	array('region' => '6','code' => '08','name' => 'Ardennes'),
		  	array('region' => '11','code' => '09','name' => 'Ariège'),
		  	array('region' => '6','code' => '10','name' => 'Aube'),
		  	array('region' => '11','code' => '11','name' => 'Aude'),
		  	array('region' => '11','code' => '12','name' => 'Aveyron'),
		  	array('region' => '13','code' => '13','name' => 'Bouches-du-Rhône'),
		  	array('region' => '9','code' => '14','name' => 'Calvados'),
		  	array('region' => '1','code' => '15','name' => 'Cantal'),
		  	array('region' => '10','code' => '16','name' => 'Charente'),
		  	array('region' => '10','code' => '17','name' => 'Charente-Maritime'),
		  	array('region' => '4','code' => '18','name' => 'Cher'),
		  	array('region' => '10','code' => '19','name' => 'Corrèze'),
		  	array('region' => '5','code' => '2A','name' => 'Corse-du-Sud'),
		  	array('region' => '5','code' => '2B','name' => 'Haute-Corse'),
		  	array('region' => '2','code' => '21','name' => 'Côte-d\'Or'),
		  	array('region' => '3','code' => '22','name' => 'Côtes-d\'Armor'),
		  	array('region' => '10','code' => '23','name' => 'Creuse'),
		  	array('region' => '10','code' => '24','name' => 'Dordogne'),
		  	array('region' => '2','code' => '25','name' => 'Doubs'),
		  	array('region' => '1','code' => '26','name' => 'Drôme'),
		  	array('region' => '9','code' => '27','name' => 'Eure'),
		  	array('region' => '4','code' => '28','name' => 'Eure-et-Loir'),
		  	array('region' => '3','code' => '29','name' => 'Finistère'),
		  	array('region' => '11','code' => '30','name' => 'Gard'),
		  	array('region' => '11','code' => '31','name' => 'Haute-Garonne'),
		  	array('region' => '11','code' => '32','name' => 'Gers'),
		  	array('region' => '10','code' => '33','name' => 'Gironde'),
		  	array('region' => '11','code' => '34','name' => 'Hérault'),
		  	array('region' => '3','code' => '35','name' => 'Ille-et-Vilaine'),
		  	array('region' => '4','code' => '36','name' => 'Indre'),
		  	array('region' => '4','code' => '37','name' => 'Indre-et-Loire'),
		  	array('region' => '1','code' => '38','name' => 'Isère'),
		  	array('region' => '2','code' => '39','name' => 'Jura'),
		  	array('region' => '10','code' => '40','name' => 'Landes'),
		  	array('region' => '4','code' => '41','name' => 'Loir-et-Cher'),
		  	array('region' => '1','code' => '42','name' => 'Loire'),
		  	array('region' => '1','code' => '43','name' => 'Haute-Loire'),
		  	array('region' => '12','code' => '44','name' => 'Loire-Atlantique'),
		  	array('region' => '4','code' => '45','name' => 'Loiret'),
		  	array('region' => '11','code' => '46','name' => 'Lot'),
		  	array('region' => '10','code' => '47','name' => 'Lot-et-Garonne'),
		  	array('region' => '11','code' => '48','name' => 'Lozère'),
		  	array('region' => '12','code' => '49','name' => 'Maine-et-Loire'),
		  	array('region' => '9','code' => '50','name' => 'Manche'),
		  	array('region' => '6','code' => '51','name' => 'Marne'),
		  	array('region' => '6','code' => '52','name' => 'Haute-Marne'),
		  	array('region' => '12','code' => '53','name' => 'Mayenne'),
		  	array('region' => '6','code' => '54','name' => 'Meurthe-et-Moselle'),
		  	array('region' => '6','code' => '55','name' => 'Meuse'),
		  	array('region' => '3','code' => '56','name' => 'Morbihan'),
		  	array('region' => '6','code' => '57','name' => 'Moselle'),
		  	array('region' => '2','code' => '58','name' => 'Nièvre'),
		  	array('region' => '7','code' => '59','name' => 'Nord'),
		  	array('region' => '7','code' => '60','name' => 'Oise'),
		  	array('region' => '9','code' => '61','name' => 'Orne'),
		  	array('region' => '7','code' => '62','name' => 'Pas-de-Calais'),
		  	array('region' => '1','code' => '63','name' => 'Puy-de-Dôme'),
		  	array('region' => '10','code' => '64','name' => 'Pyrénées-Atlantiques'),
		  	array('region' => '11','code' => '65','name' => 'Hautes-Pyrénées'),
		  	array('region' => '11','code' => '66','name' => 'Pyrénées-Orientales'),
		  	array('region' => '6','code' => '67','name' => 'Bas-Rhin'),
		  	array('region' => '6','code' => '68','name' => 'Haut-Rhin'),
		  	array('region' => '1','code' => '69','name' => 'Rhône'),
		  	array('region' => '2','code' => '70','name' => 'Haute-Saône'),
		  	array('region' => '2','code' => '71','name' => 'Saône-et-Loire'),
		  	array('region' => '12','code' => '72','name' => 'Sarthe'),
		  	array('region' => '1','code' => '73','name' => 'Savoie'),
		  	array('region' => '1','code' => '74','name' => 'Haute-Savoie'),
		  	array('region' => '8','code' => '75','name' => 'Paris'),
		  	array('region' => '9','code' => '76','name' => 'Seine-Maritime'),
		  	array('region' => '8','code' => '77','name' => 'Seine-et-Marne'),
		  	array('region' => '8','code' => '78','name' => 'Yvelines'),
		  	array('region' => '10','code' => '79','name' => 'Deux-Sèvres'),
		  	array('region' => '7','code' => '80','name' => 'Somme'),
		  	array('region' => '11','code' => '81','name' => 'Tarn'),
		  	array('region' => '11','code' => '82','name' => 'Tarn-et-Garonne'),
		  	array('region' => '13','code' => '83','name' => 'Var'),
		  	array('region' => '13','code' => '84','name' => 'Vaucluse'),
		  	array('region' => '12','code' => '85','name' => 'Vendée'),
		  	array('region' => '10','code' => '86','name' => 'Vienne'),
		  	array('region' => '10','code' => '87','name' => 'Haute-Vienne'),
		  	array('region' => '6','code' => '88','name' => 'Vosges'),
		  	array('region' => '2','code' => '89','name' => 'Yonne'),
		  	array('region' => '2','code' => '90','name' => 'Territoire de Belfort'),
		  	array('region' => '8','code' => '91','name' => 'Essonne'),
		  	array('region' => '8','code' => '92','name' => 'Hauts-de-Seine'),
		  	array('region' => '8','code' => '93','name' => 'Seine-Saint-Denis'),
		  	array('region' => '8','code' => '94','name' => 'Val-de-Marne'),
		  	array('region' => '8','code' => '95','name' => 'Val-d\'Oise')
		);
		
		foreach($departments as $dep)
		{
			$department = new Department();
			$department->setName($dep["name"]);
			$department->setCode($dep["code"]);
			$department->setRegion($manager->getRepository(Region::class)->find($dep["region"]));
			$manager->persist($department);
		}
		
		$manager->flush();		
	}
	
//	public function getOrder()
//	{
//		return 2;
//	}
    public function getDependencies()
    {
        return array(RegionFixtures::class);
    }
}