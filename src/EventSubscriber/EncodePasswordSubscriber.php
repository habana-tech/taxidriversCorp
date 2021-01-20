<?php


namespace App\EventSubscriber;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EncodePasswordSubscriber implements EventSubscriberInterface
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private UserPasswordEncoderInterface $passwordEncoder;

    /**
     * EncodePasswordSubscriber constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents()
    {
        // Return the subscribed events, their methods and priorities.
        return [
            BeforeEntityUpdatedEvent::class              => [
                'encodePassword',
                0,
            ],
        ];
    }

    public function encodePassword(BeforeEntityUpdatedEvent $event)
    {
        $entity = $event->getEntityInstance();
        if ($entity instanceof User && $entity->getPlainPassword() !== null) {
            $entity->setPassword(
                $this->passwordEncoder->encodePassword($entity, $entity->getPlainPassword())
            );
            $entity->setPlainPassword(null);
        }
    }
}
