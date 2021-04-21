<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Db\Oracle;

abstract class BaseOracleRepository
{
    private $oracleConnection;

    /**
     * BaseOracleRepository constructor.
     * @param Oracle $oracleConnection
     */
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return Oracle
     */
    public function getOracleConnection(): Oracle
    {
        return $this->oracleConnection;
    }

}