@extends('layouts.frontend.master')

@section('content')
    
    <!-- Whole Body Wrapper Starts -->
    <section id="dashboard-wrapper">
        
        @include('includes.frontend.header')
        
        <!-- Breadcrumbs -->
        <section id="breadcrumb-wrapper" class="position-relative">
            <div class="image">
                <img src="{{ asset('frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image" class="img-fluid">
            </div>
            <div class="overlay position-absolute">
                <div class="title p-4">Product Listing</div>
            </div>
        </section>
        <!-- Breadcrumbs Ends -->
        <!-- Order-Status -->
        <section id="order-wrapper" class="py-3">
            <div class="container">
                <div class="row py-xl-5 py-md-3 py-0">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-12 mb-xl-0 mb-lg-0 mb-3">
                        <div class="dashboard-list py-lg-5 px-lg-3 d-lg-block d-none">
                            <div class="d-user-avater text-center mb-4">
                                <img src="{{ asset('frontend/assets/images/product-images/1.jpg') }}" class="img-fluid avater" alt="profile-image">
                                <h5>Adam Harshvardhan</h5>
                                <a href=""> <span class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></span> Upload Image</a>
                            </div>
                            <ul class="sidebar">
                                <li class="active mb-3 p-2">
                                    <a href="dashboard-profile.html"><span class="mr-2"><i class="fa fa-user" aria-hidden="true"></i></span>Profile</a>
                                </li>
                                <li class="mb-3 p-2">
                                    <a href="dashboard-order-status.html"><span class="mr-2"><i class="fa fa-sort" aria-hidden="true"></i></span>Order Status</a>
                                </li>
                                <li class="mb-3 p-2">
                                    <a href="dashboard-cart.html"><span class="mr-2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>My Cart</a>
                                </li>
                                <li class="mb-3 p-2">
                                    <a href="dashboard-wishlist.html"><span class="mr-2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>Wishlist</a>
                                </li>
                                <li class="mb-3 p-2 ">
                                    <a href="dashboard-change-password.html"><span class="mr-2"><i class="fa fa-lock" aria-hidden="true"></i></span>Change Password</a>
                                </li>
                                <li class="mb-3 p-2 ">
                                    <a href="index.html"><span class="mr-2"><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile Profile Nav -->
                        <ul class="mobile-profile-nav d-lg-none d-flex flex justify-content-around align-items-center h-100 " data-toggle="modal" data-target="#profilemobilenav">
                            <li>
                                <span class="active"><i class="fa fa-user " aria-hidden="true "></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-sort " aria-hidden="true "></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-shopping-bag " aria-hidden="true "></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-lock " aria-hidden="true "></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-sign-out " aria-hidden="true "></i></span>
                            </li>
                        </ul>
                        </button>
                        <!-- Mobile Profile Nav Ends-->
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
                        <div class="dashboard-content d-flex align-items-center">
                            <div class="shopping-cart-table">
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="cart-product-id item">Order ID </th>
                                                <th scope="col" class="cart-product-date item">Date </th>
                                                <th scope="col" class="cart-description item">Image</th>
                                                <th scope="col" class="cart-product-name item">Product Name</th>
                                                <th scope="col" class="cart-qty item">Quantity</th>
                                                <th scope="col" class="cart-total last-item">Total</th>
                                                <th scope="col" class="cart-total last-item">Status</th>
                                                <th scope="col" class="cart-romove item"></th>
                                            </tr>
                                        </thead>
                                        <!-- /thead -->
                                        <tbody>
                                            <tr>
                                                <td class="cart-product-order-id">
                                                    <span>#123456</span>
                                                </td>
                                                <td class="cart-product-order-date">
                                                    <span>6/24/2021</span>
                                                </td>
                                                <td class="cart-image">
                                                    <a class="entry-thumbnail" href="detail.html">
                                                        <img src="{{ asset('frontend/assets/images/product-images/8.jpg') }}" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td class="cart-product-name-info">
                                                    <h4 class="cart-product-description"><a href="detail.html">Yoga Mat</a></h4>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="rating rateit-small"></div>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </td>
                                                <td class="cart-product-quantity">
                                                    <div class="quant-input">
                                                        <span>1</span>
                                                    </div>
                                                </td>
                                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                </td>
                                                <td class="cart-product-order-date">
                                                    <span class="bg-success text-white px-3 py-2">Delivered</span>
                                                </td>
                                                <td class="view-item"><a href="#" title="cancel" class="icon">
                                                        View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-product-order-id">
                                                    <span>#123456</span>
                                                </td>
                                                <td class="cart-product-order-date">
                                                    <span>6/24/2021</span>
                                                </td>
                                                <td class="cart-image">
                                                    <a class="entry-thumbnail" href="detail.html">
                                                        <img src="{{ asset('frontend/assets/images/product-images/6.jpg') }}" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td class="cart-product-name-info">
                                                    <h4 class="cart-product-description"><a href="detail.html">Yoga Mat</a></h4>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="rating rateit-small"></div>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </td>
                                                <td class="cart-product-quantity">
                                                    <div class="quant-input">
                                                        <span>1</span>
                                                    </div>
                                                </td>
                                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                </td>
                                                <td class="cart-product-order-date">
                                                    <span class="bg-warning text-white px-3 py-2">Pending</span>
                                                </td>
                                                <td class="view-item"><a href="#" title="cancel" class="icon">
                                                        View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-product-order-id">
                                                    <span>#123456</span>
                                                </td>
                                                <td class="cart-product-order-date">
                                                    <span>6/24/2021</span>
                                                </td>
                                                <td class="cart-image">
                                                    <a class="entry-thumbnail" href="detail.html">
                                                        <img src="{{ asset('frontend/assets/images/product-images/7.jpg') }}" class="img-fluid">
                                                    </a>
                                                </td>
                                                <td class="cart-product-name-info">
                                                    <h4 class="cart-product-description"><a href="detail.html">Yoga Mat</a></h4>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="rating rateit-small"></div>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </td>
                                                <td class="cart-product-quantity">
                                                    <div class="quant-input">
                                                        <span>1</span>
                                                    </div>
                                                </td>
                                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                </td>
                                                <td class="cart-product-order-date">
                                                    <span class="bg-danger text-white px-3 py-2">Cancelled</span>
                                                </td>
                                                <td class="view-item"><a href="#" title="cancel" class="icon">
                                                        View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!-- /tbody -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Order-Status Ends -->

@endsection
