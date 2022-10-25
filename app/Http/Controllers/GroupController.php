<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function show(Group $group)
    {
        return $group;
    }

    public function store(Request $request)
    {
        Group::create($request->all());
        return response()->status(201);
    }

    public function update(Request $request, Group $group)
    {
        $group->update([
            'name' => $request->name
        ]);

        return $group;
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
