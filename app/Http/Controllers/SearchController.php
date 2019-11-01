<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function search()
    {
        $search = request('search');

        $products = Product::where('title', 'LIKE', '%' . $search . '%')->get();

        if (count($products) > 0) {
            return view('search.index', compact('products'));
            } else {
            return view('search.index', compact('products'));
        }
    }
}
