<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::get()->all();
        return view('pages.assets.assets', ['assets' => $assets]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.assets.create', ['categories' => $categories]);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'asset_code' => 'required|unique:assets,asset_code',
            'asset_name' => 'unique:assets,asset_name|required',
            'brand' => 'required',
            'unit' => 'required',
            'minimum_stock' => 'required',
            'status' => 'required',
            'model' => 'required',
            'description' => 'nullable',
            'category_id' => 'required'
        ]);


        Asset::create($validated);
        return redirect('/master-assets')->with('success', 'Asset Added!');
    }

    public function edit(Asset $asset)
    {
        $categories = Category::all();
        return view('pages.assets.edit', compact('asset'), ['categories' => $categories]);
    }

    public function update(Request $request, Asset $asset)
    {
        $validated = $request->validate([
            'asset_code' => [
                'required',
                Rule::unique('assets')->ignore($asset->id),
            ],
            'asset_name' => [
                'required',
                Rule::unique('assets')->ignore($asset->id),
            ],
            'brand' => 'required',
            'model' => 'required',
            'unit' => 'required',
            'minimum_stock' => 'required|integer|min:0',
            'status' => 'required',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
        ]);


        $asset->update($validated);

        return redirect('/master-assets')
            ->with('success', 'Asset berhasil diperbarui.');
    }
}
