<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        return view('/prod', compact('products'));
    }

    public function show(Product $prod)
    {
        return view('/show', compact('prod'));
    }

}
