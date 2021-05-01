<?php


namespace strategy\Service;


class WebMoneyPayment extends PaymentMethod
{
    public function pay()
    {
        echo 'Пользователь с номером телефона: ' . $this->phone . ' оплатил заказ на сумму: ' . $this->sum . ' через систему Web Money' . '</br>';
    }
}