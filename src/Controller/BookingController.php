<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookingController extends AbstractController
{
    /**
     * @Route("/booking", name="add_booking", methods="POST")
     */
    public function index()
    {
        return $this->json([
            'controller_name' => 'BookingController',
        ]);
    }
}
