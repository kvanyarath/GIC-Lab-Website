<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::orderBy('created_at', 'DESC')->take(4)->paginate();
        return view('frontend.product.index', compact('products'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('frontend.product.show', compact('product'));
    }
}
