<?php


namespace PHP_ARCH\Repository;

use PHP_ARCH\Db\MySQL;

abstract class BaseMySQLRepository
{
    /**
     * @var MySQL
     */
    private $mySQLConnection;

    public function __construct( MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    public function getMySQLConnection(): MySQL
    {
        return $this->mySQLConnection;
    }
}