<?php

namespace PHP_ARCH\Factory;

use PHP_ARCH\Contract\RepositoryFactoryInterface;
use PHP_ARCH\Contract\OrderRepositoryInterface;
use PHP_ARCH\Contract\UserRepositoryInterface;
use PHP_ARCH\Db\Oracle;
use PHP_ARCH\Repository\OracleOrderRepository;
use PHP_ARCH\Repository\OracleUserRepository;


class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Oracle
     */
    private $oracleConnection;

    /**
     * OracleRepositoryFactory constructor.
     * @param $oracleConnection
     */
    public function __construct($oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new OracleUserRepository($this->oracleConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new OracleOrderRepository($this->oracleConnection);
    }
}