<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Laravel\Prompts\Prompt;

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

    public function product_details( Product $product){
        // dd($product);
        // $sliders=Product::latest()->get();
        return view('dashboard.view.product_details', compact('product'));
    }

    public function thanks(){
        return view('dashboard.view.thanks');
    }

    public function profile(){
        $orders=Order::where('user_id',auth()->id())->get();
        return view('dashboard.view.profile',compact('orders'));
    }
}
