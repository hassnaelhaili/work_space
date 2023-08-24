<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\Category;

class SpaceController extends Controller
{
    public function index(Request $request)
    {

        $cates = $request->get('category');
        if (!$cates) {
            $spaces =  \App\Models\Space::all();
        } else {

            $category  = Category::find($cates);
            $spaces = $category->spaces;
        }


        return view('spaces.index', compact('spaces'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('spaces.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Space::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id')
        ]);

        return redirect()->route('spaces.index')->with('success', 'Space created successfully.');
    }


    public function edit(Space $space)
    {
        $categories = Category::all();
        return view('spaces.edit', compact('space', 'categories'));
    }

    public function update(Request $request, Space $space)
    {

        $image = $space->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->move('image', 'public');
        }
        $space->update([
            'image' => $image,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id')
        ]);

        return redirect()->route('spaces.index')->with('success', 'Space updated successfully.');
    }


    public function destroy(Space $space)
    {
        $space->delete();
        return redirect()->route('spaces.index')->with('success', 'Space deleted successfully.');
    }

    public function show(Space $space)
    {
        return view('spaces.show', compact('space'));
    }
}
