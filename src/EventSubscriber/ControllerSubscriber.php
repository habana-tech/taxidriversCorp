<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 11/14/2019
 * Time: 11:06 PM
 */

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ControllerSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // Return the subscribed events, their methods and priorities.
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => [
                [
                    'setLanguageRequestAsGlobal',
                    0,
                ],
            ],
        ];
    }


    /**
     * @param ControllerArgumentsEvent $event
     * Set the current language from the request in controller event as global in the $_SESSION var
     */
    public function setLanguageRequestAsGlobal(ControllerArgumentsEvent $event)
    {
        $parameters = $event->getRequest()->attributes->all();

        if (isset($parameters['_locale']) === true) {
            $_SESSION['_locale'] = $parameters['_locale'];
        }
    }//end setLanguageRequestAsGlobal()
}
