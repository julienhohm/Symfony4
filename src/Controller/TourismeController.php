<?php

namespace App\Controller;

use App\Entity\Menu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TourismeController extends AbstractController
{
    /**
    * @Route("/", name="home")
    */
    public function home()
    {
        return $this->render('tourisme/home.html.twig');
    }
	
	public function showNavbar()
	{
        $navbar = $this->getDoctrine()->getManager()->getRepository(Menu::class)->findAll();
		return $this->render("menu.html.twig", array("navbar" => $navbar));
	}
}
