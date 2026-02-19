<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        return response()->json(['message' => 'Order Index']);
    }


    public function show($id)
    {
        return response()->json(['message' => 'Order Details for ID:' . $id]);
    }
}
