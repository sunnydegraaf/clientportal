<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Image;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Project;

class ProductController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth.storemanager', ['except' => ['index', 'show']]);
    }

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
/*        'image_id' => 'required'*/
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
        $product->update(request()->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]));

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    public function boats()
    {
        $boats = Product::where('category_id', '1')->get();
        return view('products.boats', compact('boats'));
    }
}
