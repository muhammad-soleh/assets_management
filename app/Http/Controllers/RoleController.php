<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get()->all();
        return view('pages.roles.roles', ['roles' => $roles]);
    }

    public function form()
    {
        return view('pages.roles.form');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Role::create($validated);
        return redirect('/roles')->with('success', 'Roles Added!');
    }
}
