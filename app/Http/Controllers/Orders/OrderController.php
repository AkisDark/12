<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::select('id', 'order_number', 'customer_name')->get();

        return response()->json($orders, 200);
    }


    public function show($id)
    {
        return response()->json(['message' => 'Order Details for ID:' . $id]);
    }
}
