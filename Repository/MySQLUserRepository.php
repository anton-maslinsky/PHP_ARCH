<?php


namespace PHP_ARCH\Repository;


use PHP_ARCH\Contract\UserRepositoryInterface;
use PHP_ARCH\Entity\User;

class MySQLUserRepository extends BaseMySQLRepository implements UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function create(User $user)
    {
        echo 'Create MySQL user' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function update(User $user)
    {
        echo 'Update MySQL user' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        echo 'Delete MySQL user' . PHP_EOL;
    }
}