<?php

namespace App\Repositories\Payment;


class CreditCardPayment
{
    /**
     * @return string
     * @throws \Exception
     */
    public function pay()
    {
        $this->initializeConnection();
        if(!$this->authValidation()) {
            throw new \Exception();
        }

        return $this->executeTransaction();
    }
    private function initializeConnection()
    {
        //@TODO: Add logic
    }

    private function authValidation()
    {
        //@TODO: Add logic
        return true;
    }

    private function executeTransaction()
    {
        return "CreditCard payment success!";
    }
}
