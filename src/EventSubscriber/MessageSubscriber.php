<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 11/19/2019
 * Time: 5:30 PM
 */
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Mailer\Event\MessageEvent;
use Symfony\Component\Mime\Message;
use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Component\Mime\Email;

class MessageSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return [
            MessageEvent::class => [
                ['addFromToEmails', 0],
            ],
        ];
    }

    public function addFromToEmails(MessageEvent $event)
    {
        if($event->getMessage() instanceof Email)
        {
            $event->getMessage()->from('web@taxidriverscuba.com'); //TODO: set the real email
        }


    }


}