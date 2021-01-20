<?php

namespace App\Controller\Dash;

use App\Repository\UserRepository;
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

        return $this->render('dash/board/index.html.twig',
            [
                'controller_name' => 'BoardController',
            ]);
    }


}
