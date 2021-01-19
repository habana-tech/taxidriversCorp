<?php

namespace App\Controller\Taxidrivers;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
  * @Route("/", host="%domain.taxidrivers%")
 */
class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Cache(public=true, expires="now+2h")
     * @param PlaceRepository $placeRepository
     * @return Response
     */
    public function index(PlaceRepository $placeRepository): Response
    {
        $places = $placeRepository->findAll();

        return $this->render('taxidrivers/layout.html.twig', [
            'hero' => [
                    'image' => 'images/old-car-full-16x9.jpg',
                    'link' => '#',
                    'title' => "Ready to discover Cuba?",
                    'subtitle' => 'Vinales, Varadero, airports or any other place in Cuba'
            ],
            'places'=>$places
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
