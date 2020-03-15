<?php

namespace App\Controller\Api;

use App\Entity\Booking;
use App\Entity\Client;
use App\Entity\Place;
use App\Form\BookingType;
use App\Form\ClientType;
use App\Form\PlaceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        return new Response($this->generateUrl('api_home'));
    }
}
