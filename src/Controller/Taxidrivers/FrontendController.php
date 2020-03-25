<?php

namespace App\Controller\Taxidrivers;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
  * @Route("/", host="%domain.taxidrivers%")
 */
class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Cache(mustRevalidate=false, public=true, maxage=10800, expires=10800)
     */
    public function index(PlaceRepository $placeRepository)
    {
        echo date('m:i:s');
        $places = $placeRepository->findAll();

        return $this->render('taxidrivers/index.html.twig', [
            'places'=>$places
        ]);
    }

    /**
     * @Route("/place/{id}", name="place")
     * @param Place $id
     */
    public function place(/*, Place $id*/)
    {
        return $this->render('taxidrivers/place.html.twig', [
            //'place'=>$place
        ]);
    }
}
