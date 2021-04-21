<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Contract\OrderRepositoryInterface;
use PHP_ARCH\Entity\Order;

class OracleOrderRepository extends BaseOracleRepository implements OrderRepositoryInterface
{
    public function create(Order $order)
    {
        echo 'Create Oracle order.' . PHP_EOL;
    }

    public function update(Order $order)
    {
        echo 'Update Oracle order.' . PHP_EOL;
    }

    public function delete(Order $order)
    {
        echo 'Delete Oracle order.' . PHP_EOL;
    }
}