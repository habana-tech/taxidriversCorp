<?php


namespace App\Message\Handler;

use App\Entity\User;
use App\Message\Event\UserLogged;
use App\Repository\UserRepository;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Notifier\ChatterInterface;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\AdminRecipient;

class UserLoggedHandler implements MessageHandlerInterface
{

     /**
     * @var MessageBusInterface
     */
    private $bus;
    /**
     * @var UserRepository
     */
    private $repository;
    /**
     * @var NotifierInterface
     */
    private $notifier;
    /**
     * @var ChatterInterface
     */
    private $chatter;

    public function __construct(
        MessageBusInterface $bus,
        UserRepository $repository,
        NotifierInterface $notifier,
        ChatterInterface $chatter
    ) {
        $this->bus        = $bus;
        $this->repository = $repository;
        $this->notifier   = $notifier;
        $this->chatter    = $chatter;
    }


    /**
     * @param UserLogged $command
     */
    public function __invoke(UserLogged $command): void
    {
        $user = $this->repository->find($command->getId());
        if ($user instanceof User === false) {
            return;
        }


        // Create a Notification that has to be sent
        // using the "email" channel.
        $notification = (new Notification('New Access', ['email', 'chat/telegram']))
            ->content('You have just log in!.')
            ->importance(Notification::IMPORTANCE_MEDIUM);

        // The receiver of the Notification.
        $recipient = new AdminRecipient(
            $user->getEmail()
        );

        // Send the notification to the recipient.
        $this->notifier->send($notification, $recipient);

    }//end __invoke()


}
