<?php

namespace App\Repositories\Payment;


use App\Interfaces\Payment\PayableInterface;

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
