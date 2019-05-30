<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use App\Repository\DessertRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(PlatRepository $platRepository, DessertRepository $dessertRepository): Response
    {
        //Utilisation du service plat_accueil() pour afficher mes données
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController', 'plats' => $platRepository->plat_accueil(),
            'controller_name' => 'HomeController', 'desserts' => $dessertRepository->dessert_accueil(),

        ]);
    }

    /**
     * @Route("/carte", name="carte")
     */
    public function menu(PlatRepository $platRepository, DessertRepository $dessertRepository): Response
    {
        return $this->render('home/carte.html.twig', [
            'controller_name' => 'HomeController', 'plats' => $platRepository->findAll(),
            'controller_name' => 'HomeController', 'desserts' => $dessertRepository->findAll(),
        ]);
    }

    /**
     * @Route("/a_propos", name="a_propos")
     */
    public function a_propos(){
        return $this->render('home/a_propos.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(){
        return $this->render('home/contact.html.twig');
    }

    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation(){
        return $this->render('home/reservation.html.twig');
    }
}
