@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Our Product</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li class="active">Our Product</li>
                </ul>    
            </div>
        </div>
    </div>
    <div class="shop-catalog">
        <div class="container">
            <div class="row">
                <div class="widget-area primary-sidebar col-lg-3 col-md-12 col-sm-12">
                    <aside id="search-2" class="widget widget_search">
                        <form role="search" method="get" id="search-form" class="search-form">
                            <input type="search" class="search-field" placeholder="Search…" value="" name="s">
                            <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                        </form>
                    </aside>
                    <aside class="widget widget_categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul>
                            <li><a href="#">Industrial Automation</a></li>   
                            <li><a href="#">PLC</a></li>   
                            <li><a href="#">Converter</a></li>   
                            <li><a href="#">VFD</a></li>   
                            <li><a href="#">MCC Panel</a></li>   
                            <li><a href="#">CT/PT</a></li>   
                        </ul>
                    </aside>
                    <aside class="widget widget_products">
                        <h5 class="widget-title">Popular</h5>
                        <ul class="popular-product clearfix">
                            <li class="clearfix"> 
                                <div class="thumb">
                                    <a href="#"><img src="{{url('frontend/images/product/pp1.png')}}" alt=""></a>
                                </div>
                                <div class="entry-header">
                                    <h6><a href="#">Plc Controller Board</a></h6>
                                    <span class="price-product"><span class="amount"><span>$</span>39.99</span></span>
                                </div>
                            </li>
                    
                            <li class="clearfix"> 
                                <div class="thumb">
                                    <a href="#"><img src="{{url('frontend/images/product/pp2.png')}}" alt=""></a>
                                </div>
                                <div class="entry-header">
                                    <h6><a href="#">Simence Plc Cable Converter</a></h6>
                                    <span class="price-product">
                                        <del><span class="amount"><span>$</span>59.99</span></del> 
                                        <ins><span class="amount"><span>$</span>29.99</span></ins>
                                    </span>
                                </div>
                            </li>
                    
                            <li class="clearfix"> 
                                <div class="thumb">
                                    <a href="#"><img src="{{url('frontend/images/product/product1.png')}}" alt=""></a>
                                </div>
                                <div class="entry-header">
                                    <h6><a href="#">USB Programming Cable</a></h6>
                                    <span class="price-product"><span class="amount"><span>$</span>29.99</span></span>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget woocommerce widget_price_filter">
                        <h5 class="widget-title">Filter by price</h5>
                        <form method="get">
                            <div class="price_slider_wrapper">
                                <div class="price_label">
                                    Price: <span class="from">$10</span> — <span class="to">$70</span>
                                </div>
                                <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all move"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                </div>
                                <div class="price_slider_amount" data-step="10">
                                    <div class="ot-button">
                                        <a href="#" class="btn-details"><i class="flaticon-right-arrow-1"></i> Filter</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>
                    </aside>
                    <aside class="widget widget_tag_cloud">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tagcloud">
                            <a href="#">Industrial Automation</a>
                            <a href="#">PLC</a>
                            <a href="#">Converter</a>
                            <a href="#">VFD V20</a>
                            <a href="#">MCC Panel</a>
                            <a href="#">CT/PT</a>
                        </div>
                    </aside>
                    <aside class="widget woocommerce widget_shopping_cart">
                        <h5 class="widget-title">Shopping Cart</h5>
                        <div class="widget_shopping_cart_content">
                            <ul class="cart_list">
                                <li class="clearfix"> 
                                    <a href="#" class="remove remove_from_cart_button">×</a> 
                                    <div class="thumb">
                                        <a href="#"><img src="{{url('frontend/images/product/pp1.png')}}" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="#">Simence Plc Cable Converter</a></h6>
                                        <span class="price-product"><span class="quantity">1 × </span><span class="amount"><span>$</span>39.99</span></span>
                                    </div>
                                </li>
                                <li class="clearfix"> 
                                    <a href="#" class="remove remove_from_cart_button">×</a> 
                                    <div class="thumb">
                                        <a href="#"><img src="{{url('frontend/images/product/pp2.png')}}" alt=""></a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="#">USB Programming Cable</a></h6>
                                        <span class="price-product"><span class="quantity">1 × </span><span class="amount"><span>$</span>39.99</span></span>
                                    </div>
                                </li>
                            </ul>
                            <p class="woocommerce-mini-cart__total total">
                                <strong>Subtotal:</strong> <span class="amount"><span>$</span>139.98</span>   
                            </p>
                            <p class="woocommerce-mini-cart__buttons buttons">
                                <a href="cart.html" class="octf-btn octf-btn-primary button wc-forward">View cart</a>

                            </p>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9 col-md-12 order-first order-lg-last mb-lg-0 mb-5">
                    <p class="woocommerce-result-count">Showing 1–9 of 12 results</p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                        </select>
                        <input type="hidden" name="paged" value="1">
                    </form>
                    <div class="product">
                        <div class="row">
                            @foreach($product as $val)
                            <div class="col-md-4 col-sm-6 first">
                                <div class="product-item">
                                    <div class="product-media"> 
                                        <a href="{{('/singleproduct')}}">
                                            <img src="{{ asset('img/' . $val->image) }}" class="" alt="">
                                        </a>
                                        <div class="wrapper-add-to-cart">
                                            <div class="add-to-cart-inner">
                                                <a href="#" class="octf-btn octf-btn-primary">Add to cart </a>           
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a href="#">{{$val->heading}}</a></h2>
                                    <!-- <span class="price-product"><span class="amount"><span>$</span>{{$val->price}}</span></span> -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <ul class="page-pagination text-center mt-3 none-style">
                        <li><a class="prev page-numbers" href="#"><i class="flaticon-back"></i></a></li>
                        <li><a class="page-numbers" href="#">1</a></li>
                        <li><span aria-current="page" class="page-numbers current">2</span></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#"><i class="flaticon-right-arrow-1"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-5">  
        <div class="padding-half bg-light-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners">
                            <div class="owl-carousel owl-theme home-client-carousel"> 
                                @foreach($partner as $val)     
                                <div class="partners-slide">
                                    <a href="#" class="client-logo">
                                        <figure class="partners-slide-inner">
                                            <img class="partners-slide-image" src="{{ asset('img/' . $val->image) }}" alt="">
                                        </figure>                             
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection