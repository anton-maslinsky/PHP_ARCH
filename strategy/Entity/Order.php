<?php


namespace strategy\Entity;

use strategy\Contract\PaymentInterface;


class Order
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var float
     */
    private $sum;

    /**
     * @var PaymentInterface
     */
    private $paymentMethod = null;

    /**
     * Order constructor.
     * @param string $name
     * @param string $phone
     * @param float $sum
     */
    public function __construct(string $name, string $phone, float $sum)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->sum = $sum;
    }

    /**
     * @param PaymentInterface $paymentMethod
     */
    public function setPaymentMethod(PaymentInterface $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }


    public function pay()
    {
        $this->paymentMethod->pay();
    }
}