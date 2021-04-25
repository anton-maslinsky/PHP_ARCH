<?php
namespace Decorator\Service;

use Decorator\Repository\DecoratorMessageSender;

class EmailSender extends DecoratorMessageSender
{

    public function send($message)
    {
        echo 'Сообщение отправляется на электронную почту' . '</br>';
        $this->baseMessageSender->send($message);
    }
}