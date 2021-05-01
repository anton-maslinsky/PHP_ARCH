<?php


namespace strategy\Service;


use strategy\Contract\PaymentInterface;

abstract class PaymentMethod implements PaymentInterface
{
    protected $phone;
    protected $sum;

    /**
     * PaymentMethod constructor.
     * @param $phone
     * @param $sum
     */
    public function __construct($phone, $sum)
    {
        $this->phone = $phone;
        $this->sum = $sum;
    }


}