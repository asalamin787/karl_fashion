<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $products=Product::latest()->paginate(6);
        return view('dashboard.view.index', compact('products'));
    }

    public function shop(){
        $products=Product::latest()->paginate(9);
        return view('dashboard.view.shop', compact('products'));
    }

    public function cart(){
        return view('dashboard.view.cart');
    }

    public function checkout(){
        return view('dashboard.view.checkout');
    }

    public function product_details(){
        $products=Product::latest()->get();
        return view('dashboard.view.product_details', compact('products'));
    }

    public function thanks(){
        return view('dashboard.view.thanks');
    }
}
