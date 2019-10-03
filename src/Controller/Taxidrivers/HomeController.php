<?php

namespace App\Controller\Taxidrivers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="taxidrivers_home", host="%taxidrivers_domain%")
     */
    public function index()
    {
        return $this->render('taxidrivers/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
