<?php

namespace Decorator\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Decorator/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$smsSender = new SmsSender(new BaseMessageSender());
$smsSender->send('Some text');


$emailSender = new EmailSender(new BaseMessageSender());
$emailSender->send('Some message');
