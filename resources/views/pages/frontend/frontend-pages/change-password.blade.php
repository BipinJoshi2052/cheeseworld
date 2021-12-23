@extends('layouts.frontend.master')

@section('content')

    <!-- Whole Body Wrapper Starts -->
    <section id="cart-page-wrapper">
        
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
        <!-- Change Password -->
        <section id="change-password-wrapper" class="py-3">
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
                    <div class="col-xl-7 col-lg-7 col-md-12 col-12 ">
                        <div class="change-password dashboard-content">
                            <form>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputPassword1">Old Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputPassword1">New Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputPassword1">Confirm Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <button type="submit" class="effect">Save</button>
                                    <a href="#" class="forgot-password">Forgot your Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Change Password Ends -->

@endsection