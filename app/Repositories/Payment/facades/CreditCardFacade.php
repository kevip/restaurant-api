<?php

namespace App\Repositories\Payment\Facades;


use App\Interfaces\Payment\PayableInterface;
use App\Repositories\Payment\Impl\CreditCardPayment;

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
