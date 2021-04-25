<?php

namespace Decorator\Repository;

use Decorator\Contract\MessageSenderInterface;


abstract class DecoratorMessageSender implements MessageSenderInterface
{

    protected $baseMessageSender;

    /**
     * DecoratorMessageSender constructor.
     * @param MessageSenderInterface $baseMessageSender
     */
    public function __construct(MessageSenderInterface $baseMessageSender)
    {
        $this->baseMessageSender = $baseMessageSender;
    }


}