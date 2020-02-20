<?php

namespace App\Controller\Vinales;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="vinales_home", host="%domain.vinales%")
     */
    public function index()
    {
        return $this->render('vinales/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
