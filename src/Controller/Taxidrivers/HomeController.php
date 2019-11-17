<?php

namespace App\Controller\Taxidrivers;

use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/{_locale}", defaults={"_locale": "en"}, requirements={
     * "_locale": "en|es|fr"
     * }, name="taxidrivers_home", host="%taxidrivers_domain%")
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
