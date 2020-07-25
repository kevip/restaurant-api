<?php

namespace App\Http\Controllers;


use App\Repositories\Payment\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    public function checkout(Request $request) {
        $payment = new Payment();
        $paymentType = $payment->initialize($request->get('paymentType'));
        return $paymentType->executePayment();
    }
}
