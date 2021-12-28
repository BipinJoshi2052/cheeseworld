@extends('layouts.frontend.master')

@section('content')

@section('page-wrapper', 'index-wrapper')

<!-- Banner Section Starts -->
<section id="banner-wrapper" class="position-relative py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mb-2 order-lg-1 order-md-1 order-2">
                <div class="content d-flex align-items-center h-100">
                    <div class="sub-heading">
                        <div class="slogancustom">
                            <p class="m-0 font-weight-bold">
                                <span class="eercast mr-2"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                Delicious Choice of Cheese Variant at
                            </p>
                        </div>
                        <div class="head">
                            <h1>{{ ((isset($banner) && !empty($banner->name))?($banner->name):'Cheese World') }}</h1>
                        </div>
                        <div class="discription mb-4">
                            {{ ((isset($banner) && !empty($banner->description))?($banner->description):'') }}
                        </div>
                        <div class="buttons">
                            <a href="{{route('shop-page')}}" class="effect anchor-btn">View Products</a>
                            {{-- <a href="" class="effect anchor-btn2">Try our other recipes</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-2 order-lg-2 order-md-2 order-1">
                <div class="image">                
                    <img src="{{ asset('public/frontend/assets/images/banner/'.((isset($banner) && !empty($banner->image))?($banner->image):'')) }}" alt="banner-image"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends -->
<!-- Product Listing -->
<section id="product-listing-wrapper">
    <div class="container">
        <div class="product-lists padding">
            <div class="row">
                <div class="col-12">
                    <div class="heading d-flex justify-content-center align-items-center text-center mb-3 flex-wrap">
                        <div class="head">
                            <h2>Latest Products</h2>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>                
                @if(count($advancedData['latest_items']) > 0)
                    @foreach($advancedData['latest_items'] as $key => $latest_product)                    
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="{{ route('details-page', $latest_product->slug) }}">
                                        @if(!empty($latest_product->image_url))
                                            <img class="pic-1" src="{{ get_image_url( $latest_product->image_url ) }}" alt="{{ basename( get_image_url( $latest_product->image_url ) ) }}" />
                                        @else
                                            <img class="pic-1" src="{{ default_placeholder_img_src() }}" alt="" />
                                        @endif
                                    </a>
                                    <ul class="social single-product-add-to-cart">                                        
                                        <li>
                                            <a href="" data-id="{{ $latest_product->id }}" class="fa fa-shopping-bag product-wishlist"></a>
                                        </li>
                                        <li>
                                            <a href="" data-id="{{ $latest_product->id }}" class="fa fa-shopping-cart add-to-cart-bg"></a>
                                        </li>
                                    </ul>
                                    {{-- <span class="product-discount-label">-20%</span> --}}
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">{!! $latest_product->title !!}</a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        {!! price_html( get_product_price_html_by_filter(get_role_based_price_by_product_id($latest_product->id, $latest_product->price)), get_frontend_selected_currency()) !!}
                                        {{-- <span>£ 10.00</span> --}}
                                    </div>
                                    <a class="all-deals effect" href="{{ route('details-page', $latest_product->slug) }}">View Product <i class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No new products Available.</p>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Product Listing Ends -->
<!-- Ads Slider -->
<section id="ads-banner-wrapper" class="py-5">
    <div class="slick-slider">
        <div class="slick-item position-relative">
            <img src="{{ asset('public/frontend/assets/images/product-images/1.jpg') }}" class="img-fluid w-100">
            <div class="discription px-4 py-3">
                <div class="head">
                    <h3><span>Recipes</span> made with love & good taste.</h3>
                </div>
                <a href="" class="effect anchor-btn">View Products</a>
            </div>
        </div>
        <div class="slick-item position-relative">
            <img src="{{ asset('public/frontend/assets/images/product-images/5.jpg') }}" class="img-fluid w-100">
            <div class="discription px-4 py-3">
                <div class="head">
                    <h3><span>Recipes</span> made with love & good taste.</h3>
                </div>
                <a href="" class="effect anchor-btn">View Products</a>
            </div>
        </div>
        <div class="slick-item position-relative">
            <img src="{{ asset('public/frontend/assets/images/product-images/6.jpg') }}" class="img-fluid w-100">
            <div class="discription px-4 py-3">
                <div class="head">
                    <h3><span>Recipes</span> made with love & good taste.</h3>
                </div>
                <a href="" class="effect anchor-btn">View Products</a>
            </div>
        </div>
    </div>
</section>
<!-- Ads Slider Ends-->
<!-- Product Listing -->
<section id="product-listing-wrapper">
    <div class="container">
        <div class="product-lists padding">
            <div class="row">
                <div class="col-12">
                    <div class="heading d-flex justify-content-center align-items-center text-center mb-3 flex-wrap">
                        <div class="head">
                            <h2>Featured Products</h2>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>
                @if(count($advancedData['features_items']) > 0)
                    @foreach($advancedData['features_items'] as $key => $latest_product)                    
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="{{ route('details-page', $latest_product->slug) }}">
                                        @if(!empty($latest_product->image_url))
                                            <img class="pic-1" src="{{ get_image_url( $latest_product->image_url ) }}" alt="{{ basename( get_image_url( $latest_product->image_url ) ) }}" />
                                        @else
                                            <img class="pic-1" src="{{ default_placeholder_img_src() }}" alt="" />
                                        @endif
                                    </a>
                                    <ul class="social single-product-add-to-cart">                                        
                                        <li>
                                            <a href="" data-id="{{ $latest_product->id }}" class="fa fa-shopping-bag product-wishlist"></a>
                                        </li>
                                        <li>
                                            <a href="" data-id="{{ $latest_product->id }}" class="fa fa-shopping-cart add-to-cart-bg"></a>
                                        </li>
                                    </ul>
                                    {{-- <span class="product-discount-label">-20%</span> --}}
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">{!! $latest_product->title !!}</a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        {!! price_html( get_product_price_html_by_filter(get_role_based_price_by_product_id($latest_product->id, $latest_product->price)), get_frontend_selected_currency()) !!}
                                    </div>
                                    <a class="all-deals effect" href="{{ route('details-page', $latest_product->slug) }}">View Product <i class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>   

                    @endforeach
                @else
                    <p>No new products Available.</p>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Product Listing Ends -->
<!-- Parallax Starts -->
<section id="parallax" class="position-relative">
    <div class="discription2 px-4 py-3">
        <div class="head">
            <h3><span>Recipes</span> made with love &amp; good taste.</h3>
        </div>
        <a href="" class="effect anchor-btn" tabindex="0">View all Products</a>
    </div>
</section>
<!-- Parallax Ends -->
<!-- Product Listing -->
<section id="product-listing-wrapper">
    <div class="container">
        <div class="product-lists padding">
            <div class="row">
                <div class="col-12">
                    <div class="heading d-flex justify-content-center align-items-center text-center mb-3 flex-wrap">
                        <div class="head">
                            <h2>Customer's Favourite</h2>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>
                @if(isset($productCategoriesTree) && $productCategoriesTree)
                    @foreach ($productCategoriesTree as $index => $category)
                        @if ($index < 5)
                            
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 mb-4">
                            <div class="product-grid-item2">
                                <div class="product-grid-image2">
                                    <a href="{{ url('/product/categories') }}/{{ $category['slug'] }}">
                                        @if(!empty($category['img_url']))
                                            <img class="pic-1" src="{{ get_image_url( $category['img_url']) }}" alt="{{ basename( get_image_url( $category['img_url'] ) ) }}" />
                                        @else
                                            <img class="pic-1" src="{{ default_placeholder_img_src() }}" alt="" />
                                        @endif
                                    </a>
                                    <ul class="social d-flex flex-column">
                                        <li>
                                            <a href="{{ url('/product/categories') }}/{{ $category['slug'] }}" class="effect anchor-btn">View all our Products</a>
                                        </li>
                                    </ul>
                                    <div class="discription3">
                                        <h5 class="m-0"> {{ $category['name'] }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Product Listing Ends -->

@endsection
