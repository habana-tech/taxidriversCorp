<?php

namespace App\Controller\Dash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PlaceRepository;

/**
     * @Route("/places", host="%domain.dash%")
     */
class PlacesController extends AbstractController
{
    /**
     * @Route("/", name="dash_places_index")
     */
    public function index(PlaceRepository $placeRepository)
    {
        $places = $placeRepository->findAll();
        return $this->render('dash/board/places.html.twig', [
            'places' => $places,
        ]);
    }


    /**
     * @Route("/add", name="dash_places_add")
     */
    public function add()
    {
        return $this->render('dash/email.txt.twig', [
            'controller_name' => 'BoardController',
        ]);
    }

}
