@extends('dashboard.view.layouts.main')
@section('link')
    <style>
        * {
            margin: 0;
            padding: 0
        }

        body {
            background-color: #000
        }

        .card {
            width: 350px;
            background-color: #efefef;
            border: none;
            cursor: pointer;
            transition: all 0.5s;
        }

        .image img {
            transition: all 0.5s
        }

        .card:hover .image img {
            transform: scale(1.5)
        }

        .btn2 {
            height: 140px;
            width: 140px;
            border-radius: 50%
        }

        .name {
            font-size: 22px;
            font-weight: bold
        }

        .idd {
            font-size: 14px;
            font-weight: 600
        }

        .idd1 {
            font-size: 12px
        }

        .number {
            font-size: 22px;
            font-weight: bold
        }

        .follow {
            font-size: 12px;
            font-weight: 500;
            color: #444444
        }

        .btn1 {
            height: 40px;
            width: 150px;
            border: none;
            background-color: #000;
            color: #aeaeae;
            font-size: 15px
        }

        .text span {
            font-size: 13px;
            color: #545454;
            font-weight: 500
        }

        .icons i {
            font-size: 19px
        }

        hr .new1 {
            border: 1px solid
        }

        .join {
            font-size: 14px;
            color: #a0a0a0;
            font-weight: bold
        }

        .date {
            background-color: #ccc
        }
    </style>
@endsection
@section('cover_photo')
<header style="background-image: url(view/img/bg-img/bg-1.jpg);">
@endsection
@section('main')
    <div class="cart_area section_padding_100 clearfix">
        <div class="d-flex container">
            <div class="card p-4 ">
                <div class=" image d-flex flex-column justify-content-center align-items-center">
                    <button class="btn btn-secondary btn2">
                        <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
                    </button>
                    <span class="name mt-3">{{Auth::user()->name}}</span>
                    <span class="idd">{{Auth::user()->email}}</span>

                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                        <span class="idd1">Oxc4c16a645_b21a</span>
                        <span><i class="fa fa-copy"></i></span>
                    </div>

                    <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                        <span class="number">1069 <span class="follow">Followers</span></span>
                    </div>

                    <div class=" d-flex mt-2">
                        <button class="btn1 btn-dark">Edit Profile</button>
                    </div>

                    <div class="text mt-3">
                        <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/
                            Creative Director by Day #NFT minting@ with FND night. </span>
                    </div>
                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                        <span><i class="fa fa-twitter"></i></span>
                        <span><i class="fa fa-facebook-f"></i></span>
                        <span><i class="fa fa-instagram"></i></span>
                        <span><i class="fa fa-linkedin"></i></span>
                    </div>

                    <div class=" px-2 rounded mt-4 date "> <span class="join">{{Auth::user()->created_at}}</span> </div>
                </div>
            </div>


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
                    <div class="col-12">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>
                            @if (auth()->check())
                                <ul class="cart-total-chart">
                                    <li><span>Total Itim</span> <span>{{ Cart::getTotalQuantity() }}</span></li>
                                    <li><span>Shipping</span> <span>Free</span></li>
                                    <li><span><strong>Total</strong></span>
                                        <span><strong>${{ Cart::getSubTotal() }}</strong></span>
                                    </li>
                                </ul>

                                <p  class=" karl-checkout-btn"></p>
                            @else
                                <p class="btn karl-checkout-btn"></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
