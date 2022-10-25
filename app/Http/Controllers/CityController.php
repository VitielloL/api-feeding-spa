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
        $this->validate($request, ['city_group_id' => 'nullable|exists:city_groups,id',]);
        City::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, City $city)
    {
        $city->update([
            'name' => $request->name
        ]);
        if($request->has('city_group_id')){
            $this->validate($request, ['city_group_id' => 'exists:city_groups,id',]);
            $city->update([
                'city_group_id' => $request->city_group_id
            ]);
        }

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
