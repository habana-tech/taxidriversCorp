<?php

namespace App\Controller\Taxidrivers;

use App\Repository\ClientRepository;
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
    public function index(Request $request, $_locale, ClientRepository $clientRepository)
    {
        if(isset($_SESSION['_locale']))
            echo $_SESSION['_locale'];

        $clients = $clientRepository->findAll();

        return $this->render('taxidrivers/home/index.html.twig', [
            'controller_name' => 'HomeController',
            'clients' => $clients
        ]);
    }
}
