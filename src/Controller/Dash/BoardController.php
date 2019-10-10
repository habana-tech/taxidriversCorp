<?php

namespace App\Controller\Dash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

	/**
     * @Route(host="%dash_domain%")
     */
class BoardController extends AbstractController
{
    /**
     * @Route("/", name="dash_home")
     */
    public function index()
    {
        return $this->render('dash/board/index.html.twig', [
            'controller_name' => 'BoardController',
        ]);
    }

    /**
     * @Route("/bookings", name="bookings")
     */
    public function bookingList()
    {
        return $this->render('dash/board/blank.html.twig', [
            'controller_name' => 'bookingList',
            'page_title' => 'Booking List',
            'iframe_path' => 'easyadmin',
        ]);
    }


    /**
     * @Route("/info", name="phpinfo")
     */
    public function info()
    {
        phpinfo();
        exit();
    }
}
