<?php
 namespace PHP_ARCH\Factory;

use PHP_ARCH\Contract\OrderRepositoryInterface;
use PHP_ARCH\Contract\RepositoryFactoryInterface;
use PHP_ARCH\Contract\UserRepositoryInterface;
use PHP_ARCH\Repository\PostgreSQLUserRepository;
use PHP_ARCH\Repository\PostgreSQLOrderRepository;
use PHP_ARCH\Db\PostgreSQL;

class PostgreSQLRepositoryFactory implements RepositoryFactoryInterface
{
    private  $postgreSQLConnection;

    /**
     * PostgreSQLRepositoryFactory constructor.
     * @param $postgreSQLConnection
     */
    public function __construct(PostgreSQL $postgreSQLConnection)
    {
        $this->postgreSQLConnection = $postgreSQLConnection;
    }

    public function createOrderRepository(): OrderRepositoryInterface
    {
       return new PostgreSQLOrderRepository($this->postgreSQLConnection);
    }

    public function createUserRepository(): UserRepositoryInterface
    {
        return new PostgreSQLUserRepository($this->postgreSQLConnection);
    }

}