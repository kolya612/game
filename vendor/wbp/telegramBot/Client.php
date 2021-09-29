<?php

namespace wbp\telegramBot;

use Closure;
use TelegramBot\Api\Types\Update;

class Client extends \TelegramBot\Api\Client
{
    public function contactCommand(Closure $action)
    {
        return $this->on(self::getEvent($action), self::getContactChecker());
    }

    public function currentContactCommand(Closure $action)
    {
//        $this->sendMessage("153170246", self::getContactChecker(true));
        return $this->on(self::getEvent($action), self::getContactChecker(true));
    }

    protected static function getContactChecker($currentUser=false)
    {

        return function (Update $update) use ($currentUser){
            $message = $update->getMessage();
            if (is_null($message) || is_null($message->getContact()) || !strlen($message->getContact()->getUserId())) {
                return false;
            }

            if($currentUser && $message->getFrom()->getId()!=$message->getContact()->getUserId()) return false;

            return true;
        };
    }
}