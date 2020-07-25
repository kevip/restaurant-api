<?php

namespace App\Repositories\Order;


use App\Repositories\Payment\Payment;
use Illuminate\Http\Request;

class OrderRepository
{
    public function registerOrder(Request $request)
    {
        //@TODO: store order data in database

        $address = new AddressBuilder($request->get("shippingAddress"));
        $address->withCalle($request->get("calle"))
                ->withDistrito($request->get("distrito"))
                ->withProvincia($request->get("provincia"))
                ->withDepartamento($request->get("departamento"))
                ->build();

        return $this->execPayment($request);

    }

    public function cancelOrder()
    {
        //@TODO: implement cancelOrder

    }

    public function calcTax()
    {
        //@TODO: implement calcTax

    }

    private function execPayment(Request $request)
    {
        $payment = new Payment();
        $paymentType = $payment->initialize($request->get('paymentType'));
        return $paymentType->executePayment();

    }


}