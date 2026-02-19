<?php

namespace App\Http\Controllers\Proudcts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    //

    public function index()
    {
        return response()->json(['message' => 'Product index']);
    }

    public function show($id)
    {
        return response()->json(['message' => "Product details for ID: $id"]);
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'qaunaity' => 'required|numeric'
        ]);

        return response()->json(['message' => 'Product created successfully'], 201);
    }
}
