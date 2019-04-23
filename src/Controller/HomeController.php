<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/carte", name="carte")
     */
    public function menu(){
        return $this->render('home/carte.html.twig');
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
}
