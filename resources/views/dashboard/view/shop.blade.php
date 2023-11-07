@extends('dashboard.view.layouts.main')

{{-- @section('cover_photo')
    <header style="background-image: url(view/img/bg-img/bg-1.jpg);">
    @endsection --}}
{{-- @section('offer_page')
        <div class="single-discount-area">
            <h5>Free Shipping &amp; Returns</h5>
            <h6><a href="#">BUY NOW</a></h6>
        </div>
        <!-- Single Discount Area -->
        <div class="single-discount-area">
            <h5>20% Discount for all dresses</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
        <!-- Single Discount Area -->
        <div class="single-discount-area">
            <h5>20% Discount for students</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
    @endsection --}}

@section('main')
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <div class="modal-body">
                    <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="quickview_pro_img">
                                        <img src="img/product-img/product-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview_pro_des">
                                        <h4 class="title">Boutique Silk Dress</h4>
                                        <div class="top_seller_product_rating mb-15">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="price">$120.99 <span>$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                            expedita
                                            quibusdam aspernatur, sapiente consectetur accusantium perspiciatis
                                            praesentium
                                            eligendi, in fugiat?</p>
                                        <a href="#">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class="cart" method="post">
                                        <div class="quantity">
                                            <span class="qty-minus"
                                                onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                    class="fa fa-minus" aria-hidden="true"></i></span>

                                            <input type="number" class="qty-text" id="qty" step="1"
                                                min="1" max="12" name="quantity" value="1">

                                            <span class="qty-plus"
                                                onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add
                                            to
                                            cart</button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                        </div>
                                    </form>

                                    <div class="share_wf mt-30">
                                        <p>Share With Friend</p>
                                        <div class="_icon">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Quick View Modal Area End ****** -->

    <section class="shop_grid_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <div class="widget catagory mb-50">
                            <!--  Side Nav  -->
                            <div class="nav-side-menu">
                                <h6 class="mb-0">Catagories</h6>
                                <div class="menu-list">
                                    <ul id="menu-content2" class="menu-content collapse out">
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#women2">
                                            @foreach ($catagories as $category)
                                                <a
                                                    href="{{ route('shop', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                            @endforeach
                                            {{-- <ul class="sub-menu collapse show" id="women2">
                                                <li><a href="#">Midi Dresses</a></li>
                                                <li><a href="#">Maxi Dresses</a></li>
                                                <li><a href="#">Prom Dresses</a></li>
                                                <li><a href="#">Little Black Dresses</a></li>
                                                <li><a href="#">Mini Dresses</a></li>
                                            </ul> --}}
                                        </li>
                                        <!-- Single Item -->
                                        {{-- <li data-toggle="collapse" data-target="#man2" class="collapsed">
                                            <a href="#">Man Wear</a>
                                            <ul class="sub-menu collapse" id="man2">
                                                <li><a href="#">Man Dresses</a></li>
                                                <li><a href="#">Man Black Dresses</a></li>
                                                <li><a href="#">Man Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#kids2" class="collapsed">
                                            <a href="#">Children</a>
                                            <ul class="sub-menu collapse" id="kids2">
                                                <li><a href="#">Children Dresses</a></li>
                                                <li><a href="#">Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#bags2" class="collapsed">
                                            <a href="#">Bags &amp; Purses</a>
                                            <ul class="sub-menu collapse" id="bags2">
                                                <li><a href="#">Bags</a></li>
                                                <li><a href="#">Purses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#eyewear2" class="collapsed">
                                            <a href="#">Eyewear</a>
                                            <ul class="sub-menu collapse" id="eyewear2">
                                                <li><a href="#">Eyewear Style 1</a></li>
                                                <li><a href="#">Eyewear Style 2</a></li>
                                                <li><a href="#">Eyewear Style 3</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#footwear2" class="collapsed">
                                            <a href="#">Footwear</a>
                                            <ul class="sub-menu collapse" id="footwear2">
                                                <li><a href="#">Footwear 1</a></li>
                                                <li><a href="#">Footwear 2</a></li>
                                                <li><a href="#">Footwear 3</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="widget price mb-50">
                            <h6 class="widget-title mb-30">Filter by Price</h6>
                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="0" data-max="3000" data-unit="$"
                                        class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all"
                                            tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all"
                                            tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Price: 0 - 1350</div>
                                </div>
                            </div>
                        </div>

                        <div class="widget color mb-70">
                            <h6 class="widget-title mb-30">Filter by Color</h6>
                            <div class="widget-desc">
                                <ul class="d-flex justify-content-between">
                                    <li class="gray"><a href="#"><span>(3)</span></a></li>
                                    <li class="red"><a href="#"><span>(25)</span></a></li>
                                    <li class="yellow"><a href="#"><span>(112)</span></a></li>
                                    <li class="green"><a href="#"><span>(72)</span></a></li>
                                    <li class="teal"><a href="#"><span>(9)</span></a></li>
                                    <li class="cyan"><a href="#"><span>(29)</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget size mb-50">
                            <h6 class="widget-title mb-30">Filter by Size</h6>
                            <div class="widget-desc">
                                <ul class="d-flex justify-content-between">
                                    <li><a href="#">XS</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget recommended">
                            <h6 class="widget-title mb-30">Recommended</h6>

                            <div class="widget-desc">


                                <div class="single-recommended-product d-flex mb-30">
                                    <div class="single-recommended-thumb mr-3">
                                        <img src="" alt="">
                                    </div>
                                    <div class="single-recommended-desc">
                                        <h6>Men’s T-shirt</h6>
                                        <p>$ </p>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="row mb-3" style="justify-content: end;">
                        <div class="col-6">

                            <div class="subscribtion_form">
                                <form action="{{ route('shop') }}" method="GET">
                                    <input type="text" name="search" class="mail" placeholder="Search for your product">
                                    <button type="submit" class="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="shop_grid_product_area">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig"
                                    data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img" style="height: 287px">
                                        <img style="height: 287px" src="{{ Storage::url($product->image) }}"
                                            alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <a href="{{ route('product_details', $product->slug) }}">
                                            <h5><strong>{{ $product->name }}</strong></h5>
                                            <h4 class="product-price">${{ $product->sale_price }}</h4>
                                            <p>{{ $product->description }}</p>
                                        </a>
                                        <!-- Add to Cart -->
                                        <form action="{{ route('cart.store') }}" method="post">

                                            @csrf
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit" class="add-to-cart-btn border-0 bg-light">ADD TO
                                                CART</a>
                                        </form>

                                    </div>
                                </div>
                            @endforeach
                            <!-- Single gallery Item -->
                        </div>
                    </div>

                    <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm">
                                {{-- {{ $products->onEachSide(5)->links() }} --}}
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
