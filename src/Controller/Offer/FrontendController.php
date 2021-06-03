<?php

namespace App\Controller\Offer;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use App\TxdServices\ServicesCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
  * @Route("/", host="%domain.offer%")
 */
class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param PlaceRepository $placeRepository
     * @return Response
     */
    public function index(PlaceRepository $placeRepository): Response
    {
        $places = $placeRepository->findAll();
        $services = new ServicesCollection();
        $fromAirports = $services->airports;

        return $this->render('taxidrivers/layout.html.twig', [
            'hero' => [
                    'image' => ['path' => 'images/old-car-full-16x9.jpg', 'title' => 'Vinales'],
                    'link' => '#',
                    'title' => "Ready to discover Cuba?",
                    'subtitle' => 'Vinales, Varadero, airports or any other place in Cuba'
            ],
            'places' => $places,
            'airports' => $fromAirports,
        ]);
    }

    /**
     * @Route("/place/{id}", name="place")
     * @param Place $id
     */
    public function place(/*, Place $id*/)
    {
        return $this->render('taxidrivers_/place.html.twig', [
            //'place'=>$place
        ]);
    }
}
