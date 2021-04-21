<?php


namespace PHP_ARCH\Contract;

use PHP_ARCH\Entity\User;

interface UserRepositoryInterface
{
    public function create(User $user);

    public function update(User $user);

    public function delete(User $user);
}