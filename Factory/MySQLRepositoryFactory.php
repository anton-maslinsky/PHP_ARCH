<?php

namespace PHP_ARCH\Factory;

use PHP_ARCH\Contract\OrderRepositoryInterface;
use PHP_ARCH\Contract\RepositoryFactoryInterface;
use PHP_ARCH\Contract\UserRepositoryInterface;
use PHP_ARCH\Repository\MySQLOrderRepository;
use PHP_ARCH\Repository\MySQLUserRepository;

class MySQLRepositoryFactory implements RepositoryFactoryInterface

{
    /**
     * @var
     */
    private $mySQLConnection;

    /**
     * MySQLRepositoryFactory constructor.
     * @param $mySQLConnection
     */
    public function __construct($mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    /**
     * @return MySQLUserRepository
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new MySQLUserRepository($this->mySQLConnection);
    }

    /**
     * @return MySQLOrderRepository
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new MySQLOrderRepository($this->mySQLConnection);
    }
}