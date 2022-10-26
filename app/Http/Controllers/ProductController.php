<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $this->validate($request, ['discount_id' => 'nullable|exists:discount,id', 'name' => 'required', 'value' => 'required']);
        Product::create($request->all());
        return response()->json(['message' => "created"],201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'value' => $request->value
        ]);
        if($request->has('discount_id')){
            $this->validate($request, ['discount_id' => 'exists:discount,id',]);
            $product->update([
                'discount_id' => $request->discount_id
            ]);
        }

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
