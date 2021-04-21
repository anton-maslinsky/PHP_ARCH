<?php


namespace PHP_ARCH\Contract;

// Абстрактная фабрика будет создавать репозитории User и Order

interface RepositoryFactoryInterface
{

    public function createUserRepository(): UserRepositoryInterface;

    public function createOrderRepository(): OrderRepositoryInterface;
    
}