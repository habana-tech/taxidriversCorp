<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 11/19/2019
 * Time: 5:30 PM
 */
namespace App\EventSubscriber;

use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Mailer\Event\MessageEvent;
use Symfony\Component\Mime\Message;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;

class MailerSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return [
            MessageEvent::class => [
                ['addReceiverAddress', 0],
            ],
        ];
    }

    public function addReceiverAddress(MessageEvent $event)
    {
        if ($event->getMessage() instanceof NotificationEmail) {
            $event->getMessage()->bcc(new Address('taxidriverscuba@gmail.com', 'Taxidrivers Cuba'));
            $event->getMessage()->addTo(ExceptionSubscriber::EMAIL_ADMIN)
                ->addTo(ExceptionSubscriber::EMAIL_ADMIN2);
        }
    }
}
