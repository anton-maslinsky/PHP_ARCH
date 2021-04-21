<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Db\PostgreSQL;

abstract class BasePostgreSQLRepository
{
    /**
     * @var PostgreSQL
     */
    private $postgreSQLConnection;

    /**
     * BasePostgreSQLRepository constructor.
     * @param PostgreSQL $postgreSQLConnection
     */
    public function __construct(PostgreSQL $postgreSQLConnection)
    {
        $this->postgreSQLConnection = $postgreSQLConnection;
    }

    /**
     * @return PostgreSQL
     */
    public function getPostgreSQLConnection(): PostgreSQL
    {
        return $this->postgreSQLConnection;
    }
}