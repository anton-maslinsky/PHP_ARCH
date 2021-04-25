<?php
namespace Decorator\Service;

use Decorator\Repository\DecoratorMessageSender;

class SmsSender extends DecoratorMessageSender
{

    public function send($message)
    {
        echo 'Сообщение отправляется по SMS'  . '</br>';
        $this->baseMessageSender->send($message);
    }
}