<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons=Coupon::latest()->get();
        return view('dashboard.coupon.show_coupon', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.coupon.create_coupon');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // $request->validate([
        //     'code' => 'required',
        //     'discount' => 'required|numeric',
        //     'expire_at' => 'required|date',
        //     'limit' => 'required|numeric',
        //     'minimum_cart' => 'required|numeric',
        //     'used' => 'required|numeric',
        // ]);

        
        Coupon::create([
            'code' => $request->code,
            'discount' => $request->discount,
            'expire_at' => $request->expire_at,
            'limit' => $request->limit,
            'minimum_cart' => $request->minimum_cart,
            // 'used' => $request->used,
        ]);
        return back()->with('message', 'Coupon Added SuccessFull');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        return view('dashboard.coupon.edit_coupon', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        $coupon->update([
            'code' => $request->code,
            'discount' => $request->discount,
            'expire_at' => $request->expire_at,
            'limit' => $request->limit,
            'minimum_cart' => $request->minimum_cart,
            'used' => $request->used,
        ]);
        return redirect('coupons')->with('message', 'Coupon Edit SuccessFull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect('coupons')->with('message', 'Coupon Delete SuccessFull');
    }


    public function add_coupon(request $request)
	{
		$coupon = Coupon::where('code', $request->coupon_code)->first();

		Session::put('discount', $coupon->discount);
		Session::put('discount_code', $coupon->code);
		$coupon->increment('used');

		return back()->with('message', 'Coupon has been applied successfully');
	}
	public function delete()
	{
		session()->forget('discount');
		session()->forget('discount_code');
		return back()->with('message', 'Coupon removed successfully');
	}
}
