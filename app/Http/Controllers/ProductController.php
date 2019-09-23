<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Project;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('projects.create');
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $product = new Product();

        $product->title = request('title');
        $product->price = request('price');
        $product->description = request('description');

        $product->save();

        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->title = request('title');
        $product->price = request('price');
        $product->description = request('description');

        $product->save();

        return redirect('/products');
    }

    public function destroy($id)
    {
        //
    }
}
