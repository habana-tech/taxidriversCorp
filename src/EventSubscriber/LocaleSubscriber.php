<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 11/14/2019
 * Time: 11:06 PM
 */

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\RouterInterface;

class LocaleSubscriber implements EventSubscriberInterface
{

    /**
     * @var RouterInterface
     */
    private RouterInterface $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        // Return the subscribed events, their methods and priorities.
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => [
                [
                    'setLocaleRequestAsGlobal',
                    0,
                ],
            ],
            KernelEvents::REQUEST   => ['switchLangIfParam', 0],
            KernelEvents::EXCEPTION => ['redirectToLangOn404', 0],
        ];
    }


    /**
     * @param ControllerArgumentsEvent $event
     * Set the current language from the request in controller event as global in the $_SESSION var
     */
    public function setLocaleRequestAsGlobal(ControllerArgumentsEvent $event)
    {
        $parameters = $event->getRequest()->attributes->all();

        if (isset($parameters['_locale']) === true) {
            $_SESSION['_locale'] = $parameters['_locale'];
        }
    }//end setLanguageRequestAsGlobal()

    public function switchLangIfParam(RequestEvent $event)
    {
        $requestedLang   = $event->getRequest()->query->get('switchLang');
        $_route  = $event->getRequest()->attributes->get('_route');


        if ($event->isMasterRequest() === false || $requestedLang === null) {
            return;
        }

        $_routeParams = $event->getRequest()->attributes->get('_route_params');

        if (is_array($_routeParams) && $requestedLang !== null && isset($_routeParams['_locale']) === true) {
            $_routeParams['_locale'] = $requestedLang;
        }

        $url = $this->router->generate($_route, $_routeParams);
        $event->setResponse(new RedirectResponse($url));
    }

    public function redirectToLangOn404(RequestEvent $event)
    {
        /**
         * @var \Symfony\Component\HttpKernel\Event\ExceptionEvent $event
         */
        // If the code is 404 and the url is relative to HOME, try using the localized version.
        if ($event->getThrowable() instanceof NotFoundHttpException && $event->getRequest()->getPathInfo() === '/') {
            $event->setResponse(new RedirectResponse('/en/'));
        }
        $event->stopPropagation();
    }
}
