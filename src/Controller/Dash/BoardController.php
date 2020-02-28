<?php

namespace App\Controller\Dash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Notifier\ChatterInterface;
use Symfony\Component\Notifier\Message\ChatMessage;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\AdminRecipient;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(host="%domain.dash%")
 */
class BoardController extends AbstractController
{


    /**
     * @Route("/", name="dash_home")
     *
    *
     * @return Response
     */
    public function index()
    {

        return $this->render('dash/board/index.html.twig', ['controller_name' => 'BoardController']);
    }


    /**
     * @Route("/bookings", name="bookings")
     */
    public function bookingList(): Response
    {
        return $this->render(
            'dash/board/blank.html.twig',
            [
                'controller_name'        => 'bookingList',
                'page_title'             => 'Booking List',
                'iframe_path'            => 'easyadmin',
                'iframe_path_parameters' => ['entity' => 'Booking'],
            ]
        );

    }

}
