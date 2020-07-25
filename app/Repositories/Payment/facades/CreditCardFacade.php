<?php

namespace App\Repositories\Payment\Facades;


use App\Repositories\Payment\Impl\CreditCardPayment;
use App\Repositories\Payment\Interfaces\PayableInterface;


class CreditCardFacade implements PayableInterface
{
    private $payment;

    public function __construct()
    {
        $this->payment = new CreditCardPayment();
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function executePayment()
    {
        return $this->payment->pay();
    }


}
