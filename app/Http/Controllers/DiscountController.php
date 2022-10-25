<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function show(Discount $discount)
    {
        return $discount;
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'discount'=> 'required']);
        Discount::create($request->all());
        return response()->json(['message' => "created"],201);
    }

    public function update(Request $request, Discount $discount)
    {
        $discount->update([
            'name' => $request->name,
            'discount' => $request->discount
        ]);

        return $discount;
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
