<?php

namespace App\Http\Controllers\Proudcts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function store(Request $request)
    {

        return response()->json(['message' => 'Product created successfully']);
    }
}
