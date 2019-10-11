<?php
declare(strict_types=1);
namespace App\MessageHandler\User;
use MsgPhp\User\User;
use App\Message\User\RequestUserPassword;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
/**
 * @author Josue Miguel <josmiguel92@gmail.com>
 */
class UserPasswordRequested  implements MessageHandlerInterface
{

    public function __invoke(RequestUserPassword $request)
    {
        
    	dump("new password", $request);
    }
}