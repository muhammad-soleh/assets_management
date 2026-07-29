<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $deparments = Department::get()->all();
        return view('pages.departments.departments', ['departments' => $deparments]);
    }

    public function create()
    {
        return view('pages.departments.create');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Department::create($validated);
        return redirect('/departments')->with('success', 'Departments Added!');
    }

    public function edit(Department $department)
    {
        return view('pages.departments.edit', compact('department'));
    }

    public function update(Department $department, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $department->id,
            'description' => 'nullable'
        ]);

        $department->update($validated);

        return redirect('/departments')
            ->with('success', 'Department berhasil diperbarui.');
    }
}
