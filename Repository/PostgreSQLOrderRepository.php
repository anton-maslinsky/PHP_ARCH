<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Contract\OrderRepositoryInterface;
use PHP_ARCH\Entity\Order;

class PostgreSQLOrderRepository extends BasePostgreSQLRepository implements OrderRepositoryInterface
{

    public function create(Order $order)
    {
        echo 'Create PostgreSQL order.' . PHP_EOL;
    }

    public function update(Order $order)
    {
        echo 'Update PostgreSQL order.' . PHP_EOL;
    }

    public function delete(Order $order)
    {
        echo 'Delete PostgreSQL order.' . PHP_EOL;
    }
}