<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function show(City $city)
    {
        return $city;
    }

    public function store(Request $request)
    {
        City::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, City $city)
    {
        $city->update([
            'name' => $request->name
        ]);

        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
