<?php

namespace App\Http\Controllers;

use App\Category;
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
        $categories = Category::all();
        return view('products.create', compact('products', 'categories'));
    }

    public function store()
    {
        $attributes = request()->validate([
        'title' => 'required',
        'price' => 'required',
        'description' => 'required',
        'category_id' => 'required'

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
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));

    }

    public function update(Product $product)
    {

        $product->update(request(['title', 'price', 'description', 'category_id']));

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}
