<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       foreach(Cart::getContent() as $item){
        Order::create([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'country'=>$request->country,
            'post_code'=>$request->post_code,
            'city'=>$request->city,
            'product_id'=>$item->model->id,
            'subtotal'=> Cart::getSubTotal(),
            'total'=>Cart::getSubTotal(),
            'status'=>0,
        ]);
        Cart::clear();
        return redirect("thanks");
       }

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
