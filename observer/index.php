<?php

namespace observer;

use observer\Entity\User;
use observer\Service\JobExchange;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$user1 = new User('Alex', 'alex@example.com', 12);
$user2 = new User('Mike', 'mike@mail.ru', 3);

$jobExchange = new JobExchange('Developer', 'Looking for new developer');

$jobExchange->attach($user1);
$jobExchange->attach($user2);
$jobExchange->notify();

$jobExchange->detach($user1);