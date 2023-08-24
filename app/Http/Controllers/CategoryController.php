<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\space;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price_per_hour' => $request->input('price_per_hour'),
            'price_per_day' => $request->input('price_per_day')
        ]);
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }



    public function show(Category $category)
    {

        return view('categories.show', ['category' => $category]);
    }


    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {

        $image = $category->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->move('image', 'public');
        }

        $category->update([

            'image' => $image,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price_per_hour' => $request->input('price_per_hour'),
            'price_per_day' => $request->input('price_per_day')
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }


    public function destroy(Category $category)
    {
        $spaces = $category->spaces;

        foreach ($spaces as $space) {
            $space->delete();
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
