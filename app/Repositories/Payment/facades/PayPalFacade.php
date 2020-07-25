<?php

namespace App\Repositories\Payment\Facades;


use App\Interfaces\Payment\PayableInterface;
use App\Repositories\Payment\Impl\PayPalPayment;

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
