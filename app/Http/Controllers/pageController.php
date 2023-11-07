<?php

namespace App\Http\Controllers;

use App\Models\Category\Category;
use App\Models\Order;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Laravel\Prompts\Prompt;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(6);
        return view('dashboard.view.index', compact('products'));
    }

    public function shop()
    {

        $catagories = Category::latest()->get();

        if (request()->has('category')) {
            $products = Product::whereHas('category', function ($q) {
                $q->where('slug', request()->category);
            })->latest()->paginate(9);
        } else {
            $products = Product::latest()->paginate(9);
        }

        if(request('search')){
            $products=Product::where('name','like','%'.request('search').'%')->orWhere('description','like','%'.request('search').'%')->get();
        }else{
            $products = Product::latest()->paginate(9);
        }
        // dd($products);
        return view('dashboard.view.shop', compact('products', 'catagories'));
    }

    public function cart()
    {
        return view('dashboard.view.cart');
    }

    public function checkout()
    {
        return view('dashboard.view.checkout');
    }

    public function product_details($slug)
    {
        // dd($slug);
        $product = Product::where('slug', $slug)->firstOrFail();
        $show_product = Product::latest()->get();
        return view('dashboard.view.product_details', compact('product', 'show_product'));
    }

    public function thanks()
    {
        return view('dashboard.view.thanks');
    }

    public function profile()
    {
        $orders = Order::where('user_id', auth()->id())->get();
        return view('dashboard.view.profile', compact('orders'));
    }
}
