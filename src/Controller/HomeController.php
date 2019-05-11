<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(PlatRepository $platRepository): Response
    {
        //Utilisation du service plat_accueil() pour afficher mes données
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController', 'plats' => $platRepository->plat_accueil(),
        ]);
    }

    /**
     * @Route("/carte", name="carte")
     */
    public function menu(PlatRepository $platRepository): Response
    {
        return $this->render('home/carte.html.twig', [
            'controller_name' => 'HomeController', 'plats' => $platRepository->plat_accueil(),
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
