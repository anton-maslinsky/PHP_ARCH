<?php


namespace Model\EntityManager;


use src\Contract\DomainObjectInterface;
use src\IdentityMap\IdentityMap;
use Mapper\UserMapper;


class EntityManager
{
    /**
     * @var IdentityMap
     */
    private $identityMap;

    /**
     * @var UserMapper
     */
    private $userMapper;

    /**
     * EntityManager constructor.
     * @param IdentityMap $identityMap
     * @param UserMapper $userMapper
     */
    public function __construct(
        IdentityMap $identityMap,
        UserMapper $userMapper
    ) {
        $this->identityMap = $identityMap;
        $this->userMapper = $userMapper;
    }

    /**
     * @param string $class
     * @param int $id
     * @return mixed|null
     */
    public function findById(string $class, int $id)
    {
        /**
         *
         * @var DomainObjectInterface
         */
        $entity = $this->identityMap->find($class, $id);

        if ($entity !== null) {
            return $entity;
        }

        $entity = $this->userMapper->findById($id);

        if ($entity === null) {
            return null;
        }

        $this->identityMap->add($entity);

        return $entity;
    }
}