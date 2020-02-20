<?php

namespace App\Controller\Taxidrivers;

use App\Entity\Booking;
use App\Entity\Client;
use App\Entity\Place;
use App\Form\BookingType;
use App\Form\ClientType;
use App\Form\PlaceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="taxidrivers_form", host="%domain.taxidrivers%")
     */
    public function index()
    {
        $client = new Client();
        $clientForm = $this->createForm(ClientType::class, $client);

        $origin = new Place();
        $originForm = $this->createForm(PlaceType::class, $origin);
        $destination = new Place();
        $destinationForm = $this->createForm(PlaceType::class, $destination);

        $booking = new Booking();
        $bookingForm = $this->createForm(BookingType::class, $booking);

        return $this->render('taxidrivers/form/index.html.twig', [
            'clientForm' => $clientForm->createView(),
            'originForm' => $originForm->createView(),
            'destinationForm' => $destinationForm->createView(),
            'bookingForm' => $bookingForm->createView()
        ]);
    }
}
