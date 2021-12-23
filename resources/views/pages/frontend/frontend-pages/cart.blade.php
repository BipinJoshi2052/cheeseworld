@extends('layouts.frontend.master')

@section('content')

    <!-- Whole Body Wrapper Starts -->
    <section id="cart-page-wrapper">
        
        @include('includes.frontend.header')
        
        <!-- Breadcrumbs -->
        <section id="breadcrumb-wrapper" class="position-relative">
            <div class="image">
                <img src="frontend/assets/images/product-images/3.jpg" alt="breadcrumb-image" class="img-fluid">
            </div>
            <div class="overlay position-absolute">
                <div class="title p-4">Product Listing</div>
            </div>
        </section>
        <!-- Breadcrumbs Ends -->
        <!-- Cart -->
        <section id="cart-wrapper" class="py-3">
            <div class="container">
                <div class="row py-xl-5 py-md-3 py-0">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-12 mb-xl-0 mb-lg-0 mb-3">
                        <div class="dashboard-list py-lg-5 px-lg-3 d-lg-block d-none">
                            <div class="d-user-avater text-center mb-4">
                                <img src="frontend/assets/images/product-images/1.jpg" class="img-fluid avater" alt="profile-image">
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
                                <li class="mb-3 p-2">
                                    <a href="dashboard-change-password.html"><span class="mr-2"><i class="fa fa-lock" aria-hidden="true"></i></span>Change Password</a>
                                </li>
                                <li class="mb-3 p-2">
                                    <a href="index.html"><span class="mr-2"><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Mobile Profile Nav -->
                        <ul class="mobile-profile-nav d-lg-none d-flex flex justify-content-around align-items-center h-100" data-toggle="modal" data-target="#profilemobilenav">
                            <li>
                                <span class="active"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-sort" aria-hidden="true"></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                            </li>
                        </ul>
                        </button>
                        <!-- Mobile Profile Nav Ends-->
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                        <div class="profile-side-detail-edit">
                            <div class="dashboard-content d-flex align-items-center h-100">
                                <div class="shopping-cart">
                                    <div class="shopping-cart-table">
                                        <div class="table-responsive-lg">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="cart-description item">Image</th>
                                                        <th class="cart-product-name item">Product Name</th>
                                                        <th class="cart-qty item">Quantity</th>
                                                        <th class="cart-total last-item">Total</th>
                                                        <th class="cart-romove item">Remove</th>
                                                    </tr>
                                                </thead>
                                                <!-- /thead -->
                                                <tbody>
                                                    <tr>
                                                        <td class="cart-image">
                                                            <a class="entry-thumbnail" href="detail.html">
                                                                <img src="frontend/assets/images/product-images/7.jpg" class="img-fluid">
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
                                                                <input type="number" value="1">
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                        </td>
                                                        <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                        class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart-image">
                                                            <a class="entry-thumbnail" href="detail.html">
                                                                <img src="frontend/assets/images/product-images/8.jpg" class="img-fluid">
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
                                                                <input type="number" value="1">
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                        </td>
                                                        <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                        class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart-image">
                                                            <a class="entry-thumbnail" href="detail.html">
                                                                <img src="frontend/assets/images/product-images/9.jpg" class="img-fluid">
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
                                                                <input type="number" value="1">
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span>
                                                        </td>
                                                        <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                                        class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!-- /tbody -->
                                            </table>
                                            <div class="d-flex justify-content-around align-items-center w-100 my-3 flex-wrap">
                                                <form class="coupon-field d-flex flex-wrap align-items-center justify-content-center">
                                                    <input type="text" placeholder="Apply Coupon Code" class="mr-2">
                                                    <button type="button" class="effect mt-xl-0 mt-md-0 mt-2">Apply Coupon</button>
                                                </form>
                                                <div class="total-amount font-weight-bold mt-xl-0 mt-md-0 mt-2">
                                                    Total Amount : <span>$2000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-center align-items-center text-center">
                                        <div class="col-xl-4 col-lg-7 col-md-6 col-12 my-3">
                                            <div class="cart-summary sub_border_shadow p-xl-4 p-lg-4 p-md-3 p-3 text-left">
                                                <strong class="cart_text mb-3 d-block font-weight-bold">Cart Summary</strong>
                                                <div class="cart-price d-flex justify-content-between mb-2">
                                                    <h6 class="">Sub Total</h6>
                                                    <span class="cart_text">NPR 200</span>
                                                </div>
                                                <div class="cart-price d-flex justify-content-between mb-2">
                                                    <h6 class="">Shipping Cost</h6>
                                                    <span class="cart_text">NPR 0</span>
                                                </div>
                                                <hr>
                                                <div class="cart-price d-flex justify-content-between mb-2">
                                                    <h6 class="">Grand Total</h6>
                                                    <span class="cart_text">NPR 200</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 my-3">
                                            <button type="button" class="effect">Proceed Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Ends -->

@endsection