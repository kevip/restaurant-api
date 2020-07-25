<?php

namespace App\Http\Controllers;


use App\Repositories\Order\OrderRepository;
use Illuminate\Http\Request;

class OrderController
{
    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    public function registerOrder(Request $request) {
        $order = new OrderRepository();
        return $order->registerOrder($request);
    }

}