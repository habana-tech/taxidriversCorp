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
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;

class MessageSubscriber implements EventSubscriberInterface
{


    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        // Return the subscribed events, their methods and priorities.
        return [
            MessageEvent::class => [
                [
                    'addFromToEmails',
                    0,
                ],
            ],
        ];
    }//end getSubscribedEvents


    /**
     * @param MessageEvent $event
     */
    public function addFromToEmails(MessageEvent $event): void
    {
        if ($event->getMessage() instanceof Email) {
            // TODO: set the real email.
            $event->getMessage()->from(new Address('web@taxidriverscuba.com', 'TaxidriversCorp'));
        }
    }
}
