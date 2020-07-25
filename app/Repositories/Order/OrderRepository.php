<?php

namespace App\Repositories\Order;


use App\Repositories\Payment\Payment;
use Illuminate\Http\Request;

class OrderRepository
{
    public function registerOrder(Request $request)
    {
        //@TODO: store order data in database

        $customerAddress = $request->get("customerAddress");
        $orderItemList = $request->get("items");
        $address = new AddressBuilder($customerAddress["shippingAddress"]);
        $address = $address->withCalle($customerAddress["calle"])
                ->withDistrito($customerAddress["distrito"])
                ->withProvincia($customerAddress["provincia"])
                ->withDepartamento($customerAddress["departamento"])
                ->build();

        $shippingAddress = $address->getShippingAddress();
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