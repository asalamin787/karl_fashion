<?php

namespace App\Http\Controllers;

use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::latest()->paginate(10);
        return view('dashboard.product.show_products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys=Category::latest()->get();
        return view('dashboard.product.create_product', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
            'category_id'=>$request->category_id,
            'image' =>$request->file('image')->store('public/product'),
            'quantity'=>$request->quantity,
            'description'=>$request->description,
        ]);
        return back()->with('message', 'Product added successFull !');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categorys=Category::latest()->get();
        return view('dashboard.product.edit_product', compact('product','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    { 
        if($request->has('image')){
            $image=$request->file('image')->store('public/product');
            Storage::delete($request->image);
        }else{
            $image = $product->image;
        }
        $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
            'category_id'=>$request->category_id,
            'image'=>$image,
            'quantity'=>$request->quantity,
            'description'=>$request->description,
        ]);
        return redirect('/products')->with('message', 'Product Update successFull !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // dd($product);
        Storage::delete($product->image);
        $product->delete();
        return redirect('/products')->with('message', 'Product Delete successFull !');
    }
}
