<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $this->validate($request, ['discount_id' => 'nullable|exists:discount,id',]);
        Product::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->name
        ]);
        if($request->has('discount_id')){
            $this->validate($request, ['discount_id' => 'exists:discount,id',]);
            $city->update([
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
