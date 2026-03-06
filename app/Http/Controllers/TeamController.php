<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the team members.
     */
    public function index()
    {
        $teamMembers = Team::orderBy('order')->get();
        return view('team.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new team member.
     */
    public function create()
    {
            return view('team.create', [
            'action' => route('team.store')
        ]);
    }

    /**
     * Store a newly created team member in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'details' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'icon_class' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        // // Handle image upload
        // if ($request->hasFile('image')) {
        //     $validated['image'] = $request->file('image')->store('team', 'public');
        // }
        $path = $request->file('image')->store('teams', 'public_direct');
        $imagePath = 'uploads/' . $path;
        $validated['image'] = $imagePath;

        Team::create($validated);

        return redirect()->route('team.index')
            ->with('success', 'Team member added successfully.');
    }

    /**
     * Display the specified team member.
     */
    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified team member.
     */
    public function edit(Team $team)
    {
            return view('team.create', [
            'team' => $team,
            'action' => route('team.update', $team)
        ]);
    }

    /**
     * Update the specified team member in storage.
     */
    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'details' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'icon_class' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($team->image) {
                
            }
        $path = $request->file('image')->store('teams', 'public_direct');
        $imagePath = 'uploads/' . $path;
        $validated['image'] = $imagePath;
        }

        $team->update($validated);

        return redirect()->route('team.index')
            ->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified team member from storage.
     */
    public function destroy(Team $team)
    {
        // Delete associated image
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();

        return redirect()->route('team.index')
            ->with('success', 'Team member deleted successfully.');
    }

    /**
     * Reorder team members.
     */
    public function reorder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
        ]);

        foreach ($request->order as $index => $id) {
            Team::where('id', $id)->update(['order' => $index + 1]);
        }

        return response()->json(['success' => true]);
    }
}
