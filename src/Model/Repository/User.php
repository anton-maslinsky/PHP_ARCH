<?php

declare(strict_types = 1);

namespace Model\Repository;

use src\Contract;
use Mapper\UserMapper;
use Model\Entity;
use Model\EntityManager\EntityManager;
use src\IdentityMap\IdentityMap;
use src\Storage\StorageAdapter;

class User
{

    private const CLASSNAME = 'User';

    /**
     * @param int $id
     * @return Entity\User|null
     */
    public function getById(int $id): ?Entity\User
    {

        $entityManager = $this->createEntityManager();
        return $entityManager->findById(self::CLASSNAME, $id);

    }

    /**
     * @return EntityManager
     */
    private function createEntityManager(): EntityManager
    {
        return (new EntityManager(
            new IdentityMap(),
            new UserMapper(new StorageAdapter())
        ));
    }




}
