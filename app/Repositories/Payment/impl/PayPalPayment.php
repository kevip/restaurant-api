<?php

namespace App\Repositories\Payment;


class PayPalPayment
{
    /**
     * @return string
     * @throws \Exception
     */
    public function pay()
    {
        $this->initializeConnection();
        if(!$this->creditCardValidation()) {
            throw new \Exception();
        }

        return $this->executeTransaction();
    }
    private function initializeConnection()
    {
        //@TODO: Add logic
    }

    private function creditCardValidation()
    {
        //@TODO: Add logic
        return true;
    }

    private function executeTransaction()
    {
        return "PayPal payment success!";
    }

}
