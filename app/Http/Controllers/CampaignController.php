<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function show(Campaign $campaign)
    {
        return $campaign;
    }

    public function store(Request $request)
    {
        Campaign::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, Campaign $campaign)
    {
        $campaign->update([
            'name' => $request->name
        ]);

        return $campaign;
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
