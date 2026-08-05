<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::get()->all();
        return view('pages.suppliers.suppliers', ['suppliers' => $suppliers]);
    }

    public function create()
    {
        return view('pages.suppliers.create');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'email' => 'nullable',
        ]);

        Supplier::create($validated);
        return redirect('/suppliers')->with('success', 'Suppliers Added!');
    }

    public function edit(Supplier $supplier)
    {
        return view('pages.suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $validated = $request->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'email' => 'nullable',
        ]);

        $supplier->update($validated);
        return redirect('/suppliers')->with('success', 'Supplier Updated!');
    }
}
