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
        Discount::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, Discount $discount)
    {
        $discount->update([
            'name' => $request->name
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
