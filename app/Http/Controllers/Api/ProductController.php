<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list() {
        $products = Product::get(['id', 'name']);
        return response()->json($products);
    }

    public function create(Request $request) {
        return response()->json(Product::create($request->only('name', 'price')));
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        
        return response()->json($product->update($request->only('name', 'price')));
    }
}
