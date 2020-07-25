<?php

namespace App\Repositories\Payment\Facades;


use App\Repositories\Payment\Impl\PayPalPayment;
use App\Repositories\Payment\Interfaces\PayableInterface;


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
