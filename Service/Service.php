<?php

namespace PHP_ARCH\Service;


use PHP_ARCH\Contract\OrderRepositoryInterface;
use PHP_ARCH\Contract\RepositoryFactoryInterface;
use PHP_ARCH\Contract\UserRepositoryInterface;
use PHP_ARCH\Entity\Order;
use PHP_ARCH\Entity\User;

class Service
{

    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * Service constructor.
     * @param RepositoryFactoryInterface $repositoryFactory
     */
    public function __construct(RepositoryFactoryInterface $repositoryFactory)
    {
        $this->userRepository = $repositoryFactory->createUserRepository();
        $this->orderRepository = $repositoryFactory->createOrderRepository();
    }


    public function createUser(): void
    {
        $user = new User();

        $this->userRepository->create($user);
    }


    public function createOrder(): void
    {
        $order = new Order();

        $this->orderRepository->create($order);
    }

}