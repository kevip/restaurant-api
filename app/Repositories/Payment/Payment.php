<?php

namespace App\Repositories\Payment;


use App\Repositories\Payment\Facades\CreditCardFacade;
use App\Repositories\Payment\Facades\PayPalFacade;


class Payment
{
    /**
     * @param String $type
     * @return CreditCardFacade|PayPalFacade
     * @throws \Exception
     */
    public function initialize(String $type = '')
    {
        switch ($type) {
            case 'paypal':
                return new PayPalFacade();
            case 'credit':
                return new CreditCardFacade();
            case 'cash':
                throw new \Exception("Available soon!");
            default:
                throw new \Exception("Payment method not supported!");
        }
    }

}
