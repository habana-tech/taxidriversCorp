<?php

namespace App\Controller\Taxidrivers;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
  * @Route("/tmp", host="%domain.taxidrivers%")
 */
class TmpFrontendController extends AbstractController
{
    //TODO: delete this controller and temporal templates
    /**
     * @Route("/", name="_index")
     * @Cache(mustRevalidate=false, public=true, maxage=10800)
     * @param PlaceRepository $placeRepository
     * @return Response
     */
    public function index(PlaceRepository $placeRepository): Response
    {
        echo date('m:i:s');
        $places = $placeRepository->findAll();

        return $this->render('taxidrivers_/index.html.twig', [
            'places'=>$places
        ]);
    }

    /**
     * @Route("/place/{id}", name="_place")
     * @param Place $id
     */
    public function place(/*, Place $id*/)
    {
        return $this->render('taxidrivers_/place.html.twig', [
            //'place'=>$place
        ]);
    }
}
