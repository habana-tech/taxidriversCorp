<?php

namespace App\Controller\Api;

use App\Entity\Booking;
use App\Entity\Client;
use App\Entity\Place;
use App\Form\BookingType;
use App\Form\ClientType;
use App\Form\PlaceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/api", name="api_")
 */
class ApiController extends AbstractController
{

    /**
    * @Route("/", name="home")
    */
    public function index(): Response
    {
        return new Response();
    }


    /**
    * @Route("/client/add", name="client_add", methods={"POST"})
    */
    public function client_add(Request $request): Response
    {

        $data = json_decode($request->getContent(), true);
        $client = Client::createFromArray($data);
        dump($client);
        return new Response();
    }



}
