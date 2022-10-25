<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityGroup;

class GroupController extends Controller
{
    public function show(CityGroup $group)
    {
        return $group;
    }

    public function store(Request $request)
    {
        $this->validate($request, ['group_campaign_id' => 'nullable|exists:group_campaigns,id',]);
        CityGroup::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, CityGroup $group)
    {
        $group->update([
            'name' => $request->name
        ]);
        if($request->has('group_campaign_id')){
            $this->validate($request, ['group_campaign_id' => 'exists:group_campaigns,id',]);
            $city->update([
                'group_campaign_id' => $request->group_campaign_id
            ]);
        }

        return $group;
    }

    public function destroy(CityGroup $group)
    {
        $group->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
