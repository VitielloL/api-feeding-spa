<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupCampaign;

class CampaignController extends Controller
{
    public function show(GroupCampaign $campaign)
    {
        return $campaign;
    }

    public function store(Request $request)
    {
        $this->validate($request, ['product_id' => 'nullable|exists:product,id',]);
        GroupCampaign::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, GroupCampaign $campaign)
    {
        $campaign->update([
            'name' => $request->name
        ]);
        if($request->has('product_id')){
            $this->validate($request, ['product_id' => 'exists:product,id',]);
            $city->update([
                'product_id' => $request->product_id
            ]);
        }

        return $campaign;
    }

    public function destroy(GroupCampaign $campaign)
    {
        $campaign->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
