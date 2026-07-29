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

    public function create()
    {
        return view('pages.roles.create');
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

    public function edit(Role $role)
    {
        return view('pages.roles.edit', compact('role'));
    }

    public function update(Role $role, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $role->update($validated);
        return redirect('/roles')->with('success', 'Roles Updated!');
    }
}
