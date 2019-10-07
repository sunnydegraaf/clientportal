<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Project;
use App\Color;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();

        return view('colors.index', compact('colors'));
    }

    public function create()
    {
        //
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required'
        ]);

        Color::create($attributes);//->id

        return redirect('/colors');
        //$id = Product::create($attributes)->id;

    }

    public function show($id)
    {
        //
    }

    public function edit(Color $color)
    {
        return view('colors.edit', compact('color'));
    }

    public function update(Color $color)
    {

        $color->update(request(['name']));

        return redirect('/colors');

    }

    public function destroy(Color $color)
    {
        $color->delete();

        return redirect('/colors');
    }
}
