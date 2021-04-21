<?php


namespace PHP_ARCH\Contract;


use PHP_ARCH\Entity\Order;

interface OrderRepositoryInterface
{
    public function create(Order $order);

    public function update(Order $order);

    public function delete(Order $order);
}