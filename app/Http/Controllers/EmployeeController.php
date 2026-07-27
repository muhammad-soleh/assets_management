<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Location;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department', 'location', 'user.role')->get();
        return view('pages.employees.employees', ['employees' => $employees]);
    }

    public function form()
    {
        $roles = Role::all();
        $departments = Department::all();
        $locations = Location::all();
        return view('pages.employees.form', ['roles' => $roles, 'departments' => $departments, 'locations' => $locations]);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'email|required',
            'password' => 'unique:users|min:8',
            'role_id' => 'required',
            'department_id' => 'required',
            'location_id' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'employee_number' => 'unique:employees|required',
            'name' => 'required',
            'status' => 'required',
        ]);
        // dd($validated);
        DB::transaction(function () use ($validated) {
            // Check apakah role_id nya angka atau teks (untuk membedakan role baru atau lama)
            if (is_numeric($validated['role_id'])) {
                $role = Role::findOrFail($validated['role_id']);
            } else {
                $role = Role::firstOrCreate([
                    'name' => $validated['role_id']
                ], [
                    'description' => ''
                ]);
            }

            // Simpan user
            $user = User::create([

                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role_id' => $role['id'],
                'name' => $validated['name'],
            ]);

            // Simpan employee
            Employee::create([
                'user_id' => $user['id'],
                'department_id' => $validated['department_id'],
                'location_id' => $validated['location_id'],
                'phone' => $validated['phone'],
                'position' => $validated['position'],
                'employee_number' => $validated['employee_number'],

                'status' => $validated['status'],
            ]);
        });
        redirect('/employees')->with('success', 'Employee berhasil ditambahkan');
    }
}
