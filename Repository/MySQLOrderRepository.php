<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Contract\OrderRepositoryInterface;
use PHP_ARCH\Entity\Order;

class MySQLOrderRepository extends BaseMySQLRepository implements OrderRepositoryInterface
{
    public function create(Order $order)
    {
        echo 'Create MySQL order' . PHP_EOL;
    }

    public function update(Order $order)
    {
        echo 'Update MySQL order' . PHP_EOL;
    }

    public function delete(Order $order)
    {
        echo 'Delete MySQL order' . PHP_EOL;
    }
}