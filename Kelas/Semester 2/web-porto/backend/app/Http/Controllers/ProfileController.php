<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // Typically a user has only one profile, returning a collection anyway just in case, or just the user's profile.
        $profile = Profile::where('user_id', $request->user()->id)->first();
        return response()->json($profile ?: []);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'nullable|string|max:255',
            'title'     => 'nullable|string|max:255',
            'bio'       => 'nullable|string',
            'phone'     => 'nullable|string|max:255',
            'address'   => 'nullable|string|max:255',
        ]);

        $profile = Profile::updateOrCreate(
            ['user_id' => $request->user()->id],
            $validated
        );

        return response()->json($profile, 201);
    }

    public function show(string $id)
    {
        // Using $id is possible, but we mostly care about authed user's profile
        $profile = Profile::findOrFail($id);
        return response()->json($profile);
    }

    public function update(Request $request, string $id)
    {
        $profile = Profile::where('id', $id)->where('user_id', $request->user()->id)->firstOrFail();
        
        $validated = $request->validate([
            'full_name' => 'nullable|string|max:255',
            'title'     => 'nullable|string|max:255',
            'bio'       => 'nullable|string',
            'phone'     => 'nullable|string|max:255',
            'address'   => 'nullable|string|max:255',
        ]);

        $profile->update($validated);
        return response()->json($profile);
    }

    public function destroy(Request $request, string $id)
    {
        $profile = Profile::where('id', $id)->where('user_id', $request->user()->id)->firstOrFail();
        $profile->delete();
        return response()->json(null, 204);
    }
}
