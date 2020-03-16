<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function list() {
        $products = Product::all();
        return view('products.list')->with('products', $products);
    }

    public function details($id) {
        $product = Product::findOrFail($id);
        return view('products.details')->with('product', $product);
    }
}
