<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store()
    {
        $product = new Product();

        $product->title = request('title');
        $product->price = request('price');
        $product->description = request('description');

        $product->save();

        return redirect('/products');
    }
}
