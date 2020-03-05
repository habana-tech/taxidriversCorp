<?php


namespace App\Message\Event;

use App\Entity\User;

/**
 * Class UserLogged
 * Event id triggered on user logged in
 *
 * @package App\Message\Event
 */
class UserLogged
{

    private $id;

     /**
     * UserLogged constructor.
     * @param $userId
     */
    public function __construct($userId)
    {
        $this->id = $userId;
    }

    public function getId()
    {
        return $this->id;
    }

}