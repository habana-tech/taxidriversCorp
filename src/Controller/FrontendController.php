<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    /**
     * @Route("/",  
	*		name="frontend",
     * 		host="{domain}",
     *     	defaults={"domain"="%taxidrivers_domain%"},
     *     	requirements={"domain"="%taxidrivers_domain%"}
     * )
     */
    public function index()
    {
        return $this->render('frontend/index.html.twig', [
            'controller_name' => 'FrontendController',
        ]);
    }

    /**
     * @Route("/",  
	*		name="vinales_frontend",
     * 		host="{domain}",
     *     	defaults={"domain"="%vinales_domain%"},
     *     	requirements={"domain"="%vinales_domain%"}
     * )
     */
    public function indexVinales()
    {
        return $this->render('frontend/index.html.twig', [
            'controller_name' => 'indexVinales',
        ]);
    }

    /**
     * @Route("/",  
	*		name="dash_frontend",
     * 		host="{domain}",
     *     	defaults={"domain"="%dash_domain%"},
     *     	requirements={"domain"="%dash_domain%"}
     * )
     */
    public function indexDash()
    {
        return $this->render('frontend/index.html.twig', [
            'controller_name' => 'indexDash',
        ]);
    }
}
