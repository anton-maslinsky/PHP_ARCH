<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Contract\UserRepositoryInterface;
use PHP_ARCH\Entity\User;

class PostgreSQLUserRepository extends BasePostgreSQLRepository implements UserRepositoryInterface
{
    public function create(User $user)
    {
        echo 'Create PostgreSQL user.' . PHP_EOL;
    }

    public function update(User $user)
    {
        echo 'Update PostgreSQL user.' . PHP_EOL;
    }

    public function delete(User $user)
    {
        echo 'Delete PostgreSQL user.' . PHP_EOL;
    }
}