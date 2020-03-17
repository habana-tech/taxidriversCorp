<?php

namespace App\Controller\Shared;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class RegionsController extends AbstractController
{
    public function localeSelector($currentLang = null, ContainerBagInterface $params): Response
    {
        $locales  = explode('|', $params->get('app_locales'));
        $response = $this->render(
            'shared/localeSelector.html.twig',
            [
                'locales' => $locales,
                'current' => $currentLang,
            ]
        );
        // Cache for 3600 seconds.
        $response->setSharedMaxAge(3600);
        return $response;
    }
}
