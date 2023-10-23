<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        $products=Product::latest()->get();
        return view('dashboard.view.index', compact('products'));
    }

    public function shop(){
        $products=Product::latest()->get();
        $sidebars=Product::latest()->get();
        return view('dashboard.view.shop', compact('products , sidebars'));
    }
}
