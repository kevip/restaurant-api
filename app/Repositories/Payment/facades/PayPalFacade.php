<?php

namespace App\Repositories\Payment;


use App\Interfaces\Payment\PayableInterface;

class PayPalFacade implements PayableInterface
{
    private $payment;

    public function __construct()
    {
        $this->payment = new PayPalPayment();
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
