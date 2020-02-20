<?php

namespace App\Controller\Taxidrivers;

use App\Repository\ClientRepository;
use App\Repository\TaxiServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route(host="%domain.taxidrivers%")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/{_locale}",
     * name="taxidrivers_home")
     */
    public function index($_locale): Response
    {
        return $this->render('taxidrivers/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
