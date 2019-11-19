<?php

namespace App\Controller\Taxidrivers;

use App\Repository\ClientRepository;
use App\Repository\TaxiServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route(host="%taxidrivers_domain%")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/{_locale}",
     * name="taxidrivers_home")
     */
    public function index($_locale, ClientRepository $clientRepository, TaxiServiceRepository $taxiServiceRepository)
    {

        $taxiServices = $taxiServiceRepository->findByActive(true);

        $clients = $clientRepository->findAll();

        return $this->render('taxidrivers/home/index.html.twig', [
            'controller_name' => 'HomeController',
            'clients' => $clients,
            'taxiServices' => $taxiServices
        ]);
    }
}
