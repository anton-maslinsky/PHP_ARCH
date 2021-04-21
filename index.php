<?php
namespace PHP_ARCH;


use PHP_ARCH\Db\MySQL;
use PHP_ARCH\Db\Oracle;
use PHP_ARCH\Factory\MySQLRepositoryFactory;
use PHP_ARCH\Factory\OracleRepositoryFactory;
use PHP_ARCH\Service\Service;



spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^PHP_ARCH/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

//Создаём фабрику для создания репозиториев
$oracleRepositoryFactory = new OracleRepositoryFactory(new Oracle());

$serviceWithOracleRepositories = new Service($oracleRepositoryFactory);

$serviceWithOracleRepositories->createUser();
$serviceWithOracleRepositories->createOrder();

$mySQLRepositoryFactory = new MySQLRepositoryFactory(new MySQL());
$serviceWithMySQLRepositories = new Service($mySQLRepositoryFactory);


$serviceWithMySQLRepositories->createUser();
$serviceWithMySQLRepositories->createOrder();

