<?php

namespace App\Http\Controllers\Proudcts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'qaunaity' => 'required|numeric',
            'notes' => 'nullable|string',
        ]);

        return response()->json(['message' => 'Product created successfully']);
    }
}
