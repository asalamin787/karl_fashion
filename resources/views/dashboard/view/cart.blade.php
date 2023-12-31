@extends('dashboard.view.layouts.main')
@section('link')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection

@section('main')
{{-- @dd(session()->get('discount')) --}}
    <div class="cart_area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::getContent() as $product)
                                    <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="#"><img src="{{ Storage::url($product->model->image) }}"
                                                    alt="Product"></a>
                                            <h6>{{ $product->name }}</h6>
                                        </td>
                                        <td class="price"><span>${{ $product->model->sale_price }}</span></td>
                                        <td class="qty">
                                            <div class="quantity">
                                                <span class="qty-minus"
                                                    onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                        class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty" step="1"
                                                    min="1" max="99" name="quantity" value="1">
                                                <span class="qty-plus"
                                                    onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                        class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </td>
                                        <td class="total_price"><span>${{ $product->model->sale_price }}</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-footer d-flex mt-30">
                        <div class="back-to-shop w-50">
                            <a href="shop-grid-left-sidebar.html">Continue shooping</a>
                        </div>
                        <div class="update-checkout w-50 text-right">
                            <a href="#">clear cart</a>
                            <a href="#">Update cart</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">


                <div class="col-12 col-md-6 col-lg-4">
                    <div class="coupon-code-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Cupon code</h5>
                            <p>Enter your cupone code</p>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('coupon') }}" method="POST">
                            @csrf
                            <input type="text" name="coupon_code" placeholder="#569ab15">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="shipping-method-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Shipping method</h5>
                            <p>Select the one you want</p>
                        </div>

                        <div class="custom-control custom-radio mb-30">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label d-flex align-items-center justify-content-between"
                                for="customRadio1"><span>Next day delivery</span><span>$4.99</span></label>
                        </div>

                        <div class="custom-control custom-radio mb-30">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label d-flex align-items-center justify-content-between"
                                for="customRadio2"><span>Standard delivery</span><span>$1.99</span></label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label d-flex align-items-center justify-content-between"
                                for="customRadio3"><span>Personal Pickup</span><span>Free</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-total-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Cart total</h5>
                            <p>Final info</p>
                        </div>

                        <ul class="cart-total-chart">
                            <li><span>Total Itim</span> <span>{{ Cart::getTotalQuantity() }}</span></li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span><strong>Total</strong></span>
                                <span><strong>${{ Cart::getSubTotal() }}</strong></span>
                            </li>
                        </ul>
                        @if (auth()->check())
                            <a href="{{ route('checkout') }}" class="btn karl-checkout-btn">Proceed to checkout</a>
                        @else
                            <button class="btn karl-checkout-btn" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Proceed to checkout</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#checkout").click(function() {
                alert("Pless Login ");
            });
        });
    </script>
@endsection
