@extends('layouts.frontend.master')

@section('content')

@section('page-wrapper', 'index-wrapper')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{ asset('public/frontend/assets/images/banner/banner.jpg') }}" alt="breadcrumb-image"
            class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Product Listing</div>
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
                        <!-- Content -->
                        <div class="card-wrapper mb-2">
                            <div class="card-group-item">
                                <div class="card-head">
                                    <div class="heading d-flex align-items-center text-center flex-wrap mb-2">
                                        <div class="head">
                                            <h5 class="text-uppercase pl-5 m-0">Categories</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-content1">
                                    <div class="card-body p-3">
                                        <ul class="mb-0">
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1 active">Nepal Origin</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1 ">Cheese Luke</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1 ">Local Made</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1">Mozzrilla Special</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1 ">Ghee Cheese</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="" class="category-item py-1 ">Denver Origin</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="collapse" id="expand1">
                                            <ul>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1 ">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1 ">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1 ">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1 ">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1 ">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="" class="category-item py-1 ">Cheese Category 1</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                                <div class="expand text-center">
                                    <a data-toggle="collapse" href="#expand1" role="button" aria-expanded="false"
                                        aria-controls="expand1">View more</a>
                                </div>
                            </div>
                            <!-- card-group-item.// -->
                        </div>
                        <!-- Content Ends -->
                        <!-- Content -->
                        <div class="card-wrapper mt-4 mb-2">
                            <div class="card-group-item">
                                <div class="card-head">
                                    <div class="heading d-flex align-items-center text-center flex-wrap">
                                        <div class="head">
                                            <h5 class="text-uppercase pl-5 m-0">Product</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-content2">
                                    <div class="card-body">
                                        <form>
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Chopsop
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Den
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Locus
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Tangi
                                                </span>
                                            </label>
                                            <!-- form-check.// -->
                                            <label class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-label">
                                                    Erangi
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
                                            <div class="collapse" id="expand2">
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
                                            </div>
                                        </form>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                                <div class="expand text-center">
                                    <a data-toggle="collapse" href="#expand2" role="button" aria-expanded="false"
                                        aria-controls="expand2">View more</a>
                                </div>
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
                <div class="col-xl-9 col-lg-9 col-12">
                    <div class="row right-side-wrapper">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/7.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/8.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/9.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/10.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/11.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/12.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/13.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/14.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/15.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/16.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/7.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('public/frontend/assets/images/product-images/8.jpg') }}">
                                    </a>
                                    <ul class="social">
                                        <li>
                                            <a href="" class="fa fa-shopping-bag"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fa fa-shopping-cart"></a>
                                        </li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="#" class="font-weight-bold">Authentic Grana Padano </a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        £ 8.00
                                        <span>£ 10.00</span>
                                    </div>
                                    <a class="all-deals effect" href="">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="effect mx-auto mt-4">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Listing Ends -->


@endsection
