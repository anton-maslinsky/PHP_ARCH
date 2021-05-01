<?php


namespace strategy\Service;


class YandexPayment extends PaymentMethod
{

    public function pay()
    {
        echo 'Пользователь с номером телефона: ' . $this->phone . ' оплатил заказ на сумму: ' . $this->sum . ' через систему Yandex Pay' . '</br>';
    }
}