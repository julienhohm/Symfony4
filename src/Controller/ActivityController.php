<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Activity;
use App\Form\ActivityType;
use App\Entity\Department;
use App\Entity\City;

class ActivityController extends AbstractController
{
    /**
    * @Route(
        "/activite/ajouter/", 
        name = "add_activity"
    )
    */
    public function add(Request $request)
    {
		$activity = new Activity();
        
        $form = $this->createForm(ActivityType::class, $activity);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $activity->setCity($this->getDoctrine()->getManager()->getRepository(City::class)->find(1));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();
            
            $session = new Session();
            $session->start();
            $session->getFlashBag()->add("notice", "Activité bien enregistrée.");

            return $this->redirectToRoute("add_activity");
        }
        
        return $this->render('activity/add.html.twig', array("form" => $form->createView()));
    }
    
    /**
    * @Route(
        "/activite/{id}/",
        name = "view_activity",
        requirements = {"page": "\d+"}
    )
    */
    public function view($id)
    {
        
        return new Response("Affichage de l'annonce d'id : ".$id);
        //return $this->render("JHTourismeBundle:Activity:view.html.twig", array("id"=>$id));
    }
    
    /**
    * @Route(
        "/activite/ajouter/region/{regionId}",
        name = "add_activity_department_json",
        requirements = {"regionId": "\d+"},
        options = {"expose" = true}
    )
    */
    public function fillDepartments(Request $request, $regionId = 1)
    {
        $departments = array();
       
        foreach($this->getDoctrine()->getManager()->getRepository(Department::class)->findByRegion($regionId) as $department)
        {
			$departments[] = array(
				"departmentId"      => $department["id"],
				"departmentName"    => $department["name"],
				"departmentNumber"  => $department["code"]
            );
		}
                
        return new JsonResponse($departments);
    }
    
    /**
    * @Route(
        "/activite/ajouter/departement/{departmentId}",
        name = "add_activity_city_json",
        requirements = {"departmentId": "\d+"},
        options = {"expose" = true}
    )
    */
    public function fillCities(Request $request, $departmentId = 1)
    {
        $cities = array();
       
        foreach($this->getDoctrine()->getManager()->getRepository(City::class)->findByDepartment($departmentId) as $city)
        {
			$cities[] = array(
                "cityId"            => $city["id"],
				"cityName"          => $city["name"],
				"cityPostalCode"    => $city["postalCode"]
            );
		}
                
        return new JsonResponse($cities);
    }
	
}