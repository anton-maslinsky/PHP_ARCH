<?php

namespace Decorator\Contract;


interface MessageSenderInterface
{
    /**
     * @param $message
     * @return mixed
     */
    public function send($message);
}