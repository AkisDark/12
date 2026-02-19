<?php

namespace App\Http\Controllers\Proudcts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    //

    public function store(Request $request)
    {
        Log::info('store_method', $request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'qaunaity' => 'required|numeric',
            'notes' => 'nullable|string',
        ]);

        return response()->json(['message' => 'Product created successfully']);
    }
}
