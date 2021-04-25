<?php
namespace Decorator\Service;

use Decorator\Contract\MessageSenderInterface;

class BaseMessageSender implements MessageSenderInterface
{
    /**
     * @param $message
     * @return mixed|void
     */
    public function send($message)
    {
        echo 'Сообщение успешно отправлено' . '</br>';
    }
}