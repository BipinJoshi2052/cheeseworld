@extends('layouts.frontend.master')
@section('title', trans('frontend.shopist_shop_title') .' < '. get_site_title() )
@section('style')
    <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
@endsection
@section('content') 
<!-- Breadcrumbs -->
<style>
    .breadcrumb{
    background: transparent;
}
</style>
    <section id="breadcrumb-wrapper" class="position-relative">
        <div class="image">
            <img src="{{ asset('public/frontend/assets/images/banner/banner.jpg') }}" alt="breadcrumb-image" class="img-fluid">
        </div>
        <div class="overlay position-absolute">
            <div class="title p-4">
                {!! $product_by_cat_id['breadcrumb_html'] !!}
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Ends -->

    <!-- Product Listing -->
    <section id="product-listing-wrapper" class="py-5">
        <div class="container">
            <div class="product-lists">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-12">
                        <div class="left-side-wrapper px-4 py-4 d-lg-block d-none">
                            <!--Categories Start -->
                            @include('includes.frontend.categories')
                            @yield('categories-content')
                            <!--Categories End -->
                            <!-- Content -->
                            <div class="card-wrapper mt-4 mb-2">
                                <div class="card-group-item">
                                    <div class="card-head">
                                        <div class="heading d-flex align-items-center text-center flex-wrap">
                                            <div class="head">
                                                <h5 class="text-uppercase pl-5 m-0">Filter</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-content2">
                                        <div class="card-body sort-filter-option">
                                            {{-- <form> --}}
                                                <label class="form-check d-flex align-items-center">
                                                    <input class="form-check-input sort-by-filter" type="checkbox" value="all" {{ $all_products_details['sort_by'] == 'all' ? 'checked' : '' }}>
                                                    <span class="form-check-label">
                                                        All
                                                    </span>
                                                </label>
                                                <!-- form-check.// -->
                                                <label class="form-check d-flex align-items-center">
                                                    <input class="form-check-input sort-by-filter" type="checkbox" value="alpaz" {{ $all_products_details['sort_by'] == 'alpaz' ? 'checked' : '' }}>
                                                    <span class="form-check-label">
                                                        {{ trans('frontend.sort_filter_alpaz_label') }}
                                                    </span>
                                                </label>
                                                <!-- form-check.// -->
                                                <label class="form-check d-flex align-items-center">
                                                    <input class="form-check-input sort-by-filter" type="checkbox" value="alpza" {{ $all_products_details['sort_by'] == 'alpza' ? 'checked' : '' }}>
                                                    <span class="form-check-label">
                                                        {{ trans('frontend.sort_filter_alpza_label') }}
                                                    </span>
                                                </label>
                                                <!-- form-check.// -->
                                                <label class="form-check d-flex align-items-center">
                                                    <input class="form-check-input sort-by-filter" type="checkbox" value="low-high" {{ $all_products_details['sort_by'] == 'low-high' ? 'checked' : '' }}>
                                                    <span class="form-check-label">
                                                        {{ trans('frontend.sort_filter_low_high_label') }}
                                                    </span>
                                                </label>
                                                <!-- form-check.// -->
                                                <label class="form-check d-flex align-items-center">
                                                    <input class="form-check-input sort-by-filter" type="checkbox" value="high-low" {{ $all_products_details['sort_by'] == 'high-low' ? 'checked' : '' }}>
                                                    <span class="form-check-label">
                                                        {{ trans('frontend.sort_filter_high_low_label') }}
                                                    </span>
                                                </label>
                                                <!-- form-check.// -->
                                                <label class="form-check d-flex align-items-center">
                                                    <input class="form-check-input sort-by-filter" type="checkbox" value="old-new" {{ $all_products_details['sort_by'] == 'old-new' ? 'checked' : '' }}>
                                                    <span class="form-check-label">
                                                        {{ trans('frontend.sort_filter_old_new_label') }}
                                                    </span>
                                                </label>
                                                <!-- form-check.// -->
                                                <!-- form-check.// -->
                                                <label class="form-check d-flex align-items-center">
                                                    <input class="form-check-input sort-by-filter" type="checkbox" value="new-old" {{ $all_products_details['sort_by'] == 'new-old' ? 'checked' : '' }}>
                                                    <span class="form-check-label">
                                                        {{ trans('frontend.sort_filter_new_old_label') }}
                                                    </span>
                                                </label>
                                                <!-- form-check.// -->
                                                {{-- <div class="collapse" id="expand2">
                                                    <!-- form-check.// -->
                                                    <label class="form-check d-flex align-items-center">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-label">
                                                            Brand 3
                                                        </span>
                                                    </label>
                                                    <!-- form-check.// -->
                                                    <label class="form-check d-flex align-items-center">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-label">
                                                            Brand 3
                                                        </span>
                                                    </label>
                                                    <label class="form-check d-flex align-items-center">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-label">
                                                            Brand 1
                                                        </span>
                                                    </label>
                                                    <!-- form-check.// -->
                                                    <label class="form-check d-flex align-items-center">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-label">
                                                            Brand 2
                                                        </span>
                                                    </label>
                                                    <!-- form-check.// -->
                                                    <label class="form-check d-flex align-items-center">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-label">
                                                            Brand 3
                                                        </span>
                                                    </label>
                                                    <!-- form-check.// -->
                                                    <!-- form-check.// -->
                                                    <label class="form-check d-flex align-items-center">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-label">
                                                            Brand 3
                                                        </span>
                                                    </label>
                                                </div> --}}
                                            {{-- </form> --}}
                                        </div>
                                        <!-- card-body.// -->
                                    </div>
                                    {{-- <div class="expand text-center">
                                        <a data-toggle="collapse" href="#expand2" role="button" aria-expanded="false"
                                            aria-controls="expand2">View more</a>
                                    </div> --}}
                                </div>
                                <!-- card-group-item.// -->
                            </div>
                            <!-- Content Ends -->
                        </div>
                        <!-- Mobile Filter  -->
                        <!-- Button trigger modal -->
                        <button type="button" class="effect d-xl-none d-lg-none d-md-block mb-4" data-toggle="modal"
                            data-target="#leftsidebarfilter">
                            Product Filter
                            <span class="ml-2">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </span>
                        </button>
                        <!-- Mobile Filter Ends -->
                    </div>
                    <div class="col-xl-9 col-lg-9 col-12 mx-auto text-center">
                        <div class="row right-side-wrapper">
                            @if ($all_products_details['products']->count() > 0)
                            @foreach ($all_products_details['products'] as $products)
                                    <?php
                                    $reviews = get_comments_rating_details($products['id'], 'product');
                                    $reviews_settings = get_reviews_settings_data($products['id']);
                                    ?>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                                        <div class="product-grid-item">
                                            <div class="product-grid-image">
                                                <?php
                                                if (!empty($products['image_url'])) {
                                                    $product_image_url = get_image_url($products['image_url']);
                                                    $_alt = basename(get_image_url($products['image_url']));
                                                } else {
                                                    $product_image_url = default_placeholder_img_src();
                                                    $_alt = '';
                                                }
                                                ?>

                                                <a href="#">
                                                    <img class="pic-1" src="{{ $product_image_url }}"
                                                        alt="{{ $_alt }}">
                                                </a>
                                                <ul class="social single-product-add-to-cart">
                                                    <li>
                                                        <a href="" data-id="{{ $products['id'] }}"
                                                            class="fa fa-shopping-bag product-wishlist"></a>
                                                    </li>
                                                    <li>
                                                        <a href="" data-id="{{ $products['id'] }}"
                                                            class="fa fa-shopping-cart add-to-cart-bg"></a>
                                                    </li>
                                                </ul>
                                                {{-- <span class="product-discount-label">-20%</span> --}}
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title text-center">
                                                    <a href="{{ route('details-page', $products['slug']) }}"
                                                        class="font-weight-bold">{!! $products['title'] !!}</a>
                                                </h3>
                                                <div class="price text-center mb-3">
                                                    <?php
                                                    if ($products['type'] == 'simple_product') {
                                                        $_product_price = price_html(get_product_price_html_by_filter(get_role_based_price_by_product_id($products['id'], $products['price'])), get_frontend_selected_currency());
                                                    }
                                                    ?>
                                                    {!! $_product_price !!}
                                                    {{-- <span>£ 10.00</span> --}}
                                                </div>
                                                <a class="all-deals effect"
                                                    href="{{ route('details-page', $products['slug']) }}">View Product
                                                    <i class="fa fa-angle-right icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        {{-- <button type="button" class="effect mx-auto mt-4">View More</button> --}}
                        <div class="effect mx-auto mt-4">{!! $product_by_cat_id['products']->appends(Request::capture()->except('page'))->render() !!}</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Listing Ends -->
@endsection
@section('script')
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
@endsection
