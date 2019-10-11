<?php
declare(strict_types=1);
namespace App\Message\User;
use MsgPhp\User\UserId;
/**
 * @author Josue Miguel <josmigue92@gmail.com>
 */
class RequestUserPassword
{
    public $userId;
    public $token;
    public function __construct(UserId $userId, string $token = null)
    {
        $this->userId = $userId;
        $this->token = $token;
    }
}
