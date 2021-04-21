<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Contract\UserRepositoryInterface;
use PHP_ARCH\Entity\User;

class OracleUserRepository extends BaseOracleRepository implements UserRepositoryInterface
{
    public function create(User $user)
    {
        echo 'Create Oracle user.' . PHP_EOL;
    }

    public function update(User $user)
    {
        echo 'Update Oracle user.' . PHP_EOL;
    }

    public function delete(User $user)
    {
        echo 'Delete Oracle user.' . PHP_EOL;
    }
}