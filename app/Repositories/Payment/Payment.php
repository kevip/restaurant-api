<?php

namespace App\Repositories\Payment;



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
            default:
                throw new \Exception("Method not supported");
        }
    }

}
