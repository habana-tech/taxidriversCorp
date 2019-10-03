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
     * @Route("/info", name="phpinfo")
     */
    public function info()
    {
        phpinfo();
        exit();
    }
}
