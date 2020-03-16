<?php

namespace App\Controller\Taxidrivers;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(host="%domain.taxidrivers%")
 */
class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index($_locale = 'es', PlaceRepository $placeRepository)
    {
        $places = $placeRepository->findAll();

        return $this->render('taxidrivers/index.html.twig', [
            'places'=>$places
        ]);
    }

    /**
     * @Route("/place/{id}", name="place")
     * @param Place $id
     */
    public function place($_locale = 'es'/*, Place $id*/)
    {
        return $this->render('taxidrivers/place.html.twig', [
            //'place'=>$place
        ]);
    }
}
