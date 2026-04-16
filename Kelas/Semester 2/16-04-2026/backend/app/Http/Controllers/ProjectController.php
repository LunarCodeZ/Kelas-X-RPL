<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Project::where('user_id', $request->user()->id)->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url'   => 'nullable|string|max:255',
            'live_link'   => 'nullable|string|max:255',
            'github_link' => 'nullable|string|max:255',
            'tech_stack'  => 'nullable|string|max:255',
        ]);

        $project = $request->user()->projects()->create($validated);
        return response()->json($project, 201);
    }

    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    public function update(Request $request, string $id)
    {
        $project = Project::where('id', $id)->where('user_id', $request->user()->id)->firstOrFail();

        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url'   => 'nullable|string|max:255',
            'live_link'   => 'nullable|string|max:255',
            'github_link' => 'nullable|string|max:255',
            'tech_stack'  => 'nullable|string|max:255',
        ]);

        $project->update($validated);
        return response()->json($project);
    }

    public function destroy(Request $request, string $id)
    {
        $project = Project::where('id', $id)->where('user_id', $request->user()->id)->firstOrFail();
        $project->delete();
        return response()->json(null, 204);
    }
}
