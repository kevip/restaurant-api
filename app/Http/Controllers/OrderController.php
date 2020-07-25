<?php

namespace App\Http\Controllers;


use App\Repositories\Order\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
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