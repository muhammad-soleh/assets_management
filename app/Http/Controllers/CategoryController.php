<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get()->all();
        return view('pages.categories.categories', ['categories' => $categories]);
    }

    public function create()
    {

        return view('pages.categories.create');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,',
            'description' => 'nullable',
        ]);

        Category::create($validated);
        return redirect('/categories')->with('success', 'Categories Added!');
    }

    public function edit(Category $category)
    {
        return view('pages.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update($validated);

        return redirect('/categories')
            ->with('success', 'Category berhasil diperbarui.');
    }
}
