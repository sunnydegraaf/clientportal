<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth.admin', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create', compact( 'categories'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Category::create($attributes);

        return redirect('/categories');
    }

    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact( 'category'));
    }

    public function update(Category $category)
    {
        $category->update(request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]));

        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories');
    }
}
