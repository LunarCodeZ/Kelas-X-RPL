<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Goal::where('user_id', $request->user()->id)->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_date' => 'nullable|date',
            'status'      => 'nullable|string|max:50'
        ]);

        $goal = $request->user()->goals()->create($validated);
        return response()->json($goal, 201);
    }

    public function show(string $id)
    {
        $goal = Goal::findOrFail($id);
        return response()->json($goal);
    }

    public function update(Request $request, string $id)
    {
        $goal = Goal::where('id', $id)->where('user_id', $request->user()->id)->firstOrFail();

        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_date' => 'nullable|date',
            'status'      => 'nullable|string|max:50'
        ]);

        $goal->update($validated);
        return response()->json($goal);
    }

    public function destroy(Request $request, string $id)
    {
        $goal = Goal::where('id', $id)->where('user_id', $request->user()->id)->firstOrFail();
        $goal->delete();
        return response()->json(null, 204);
    }
}
