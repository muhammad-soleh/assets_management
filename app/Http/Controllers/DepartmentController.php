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

    public function form()
    {
        return view('pages.departments.form');
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
}
