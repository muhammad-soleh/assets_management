<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::get()->all();
        return view('pages.locations.locations', ['locations' => $locations]);
    }

    public function create()
    {
        return view('pages.locations.create');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'nullable',
        ]);

        Location::create($validated);
        return redirect('/locations')->with('success', 'Location Added!');
    }

    public function edit(Location $location)
    {
        return view('pages.locations.edit', compact('location'));
    }

    public function update(Location $location, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'nullable',
        ]);

        $location->update($validated);
        return redirect('/locations')->with('success', 'Location Updated!');
    }
}
