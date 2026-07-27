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

    public function form()
    {
        return view('pages.locations.form');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'type' => 'nullable',
            'description' => 'nullable',
        ]);

        Location::create($validated);
        return redirect('/locations')->with('success', 'locations Added!');
    }
}
