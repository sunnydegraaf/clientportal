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
        return view('products.create', compact('products'));
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
        'title' => 'required',
        'price' => 'required',
        'description' => 'required'
    ]);

        Product::create($attributes);

        return redirect('/products');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product)
    {

        $product->update(request(['title', 'price', 'description']));

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}
