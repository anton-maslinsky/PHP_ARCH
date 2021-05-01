<?php

namespace strategy;

use strategy\Entity\Order;
use strategy\Service\QiwiPayment;
use strategy\Service\WebMoneyPayment;
use strategy\Service\YandexPayment;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$order = new Order('John','+79213337744', 1500 );

//Оплата заказа через Yandex
$order->setPaymentMethod(new YandexPayment($order->getPhone(), $order->getSum()));
$order->pay();

//Оплата заказа через Qiwi
$order->setPaymentMethod(new QiwiPayment($order->getPhone(), $order->getSum()));
$order->pay();

//Оплата заказа через WebMoney
$order->setPaymentMethod(new WebMoneyPayment($order->getPhone(), $order->getSum()));
$order->pay();
