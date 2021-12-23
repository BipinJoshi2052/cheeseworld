@extends('layouts.frontend.master')

@section('content')

    <!-- Whole Body Wrapper Starts -->
    <section id="checkout-page-wrapper">
        
        @include('includes.frontend.header')
        
        <!-- Breadcrumbs -->
        <section id="breadcrumb-wrapper" class="position-relative">
            <div class="image">
                <img src="{{ asset('frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image" class="img-fluid">
            </div>
            <div class="overlay position-absolute">
                <div class="title p-4">Checkout</div>
            </div>
        </section>
        <!-- Breadcrumbs Ends -->
        <!-- Checkout -->
        <section id="checkout" class="padding">
            <div class="container">
                <div class="checkout-wrapper box_shado px-4 pt-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="my-car-title d-flex mb-3">
                                <div class="my-cart-number">1</div>
                                <div class="my-cart-order">
                                    <h4>Order Summary</h4>
                                </div>
                            </div>
                            <!-- table start  -->
                            <div class="table-responsive-lg">
                                <table class="table border_new">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="font-weight-bold text-dark">Product Image</th>
                                            <th class="font-weight-bold text-dark t-cart">Product</th>
                                            <th class="font-weight-bold text-dark">Price</th>
                                            <th class="font-weight-bold text-dark">Quantity</th>
                                            <th class="font-weight-bold text-dark">Discount</th>
                                            <th class="font-weight-bold text-dark">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr class="text-center">
                                            <td class="border_trhee">
                                                <div class="img-block">
                                                    <img src="https://montechbd.com/shopist/demo/public/uploads/1619866402-h-250-7-front-f.jpg" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100">
                                                    <div class="head w-100">
                                                        Blue Diamond Almonds
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text_gray">$20</td>
                                            <td class="text_gray">
                                                <input class="text_gray" type="number" value="1" />
                                            </td>
                                            <td class="text_gray">$0</td>
                                            <td class="text_gray">$20</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td class="text_gray" colspan="3"></td>
                                            <td class="text_gray">Total</td>
                                            <td class="text_gray">$20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table end  -->
                        </div>
                        <div class="col-xl-12">
                            <div class="my-car-title d-flex mb-3 mt-4">
                                <div class="my-cart-number">2</div>
                                <div class="my-cart-order">
                                    <h4>Shipping Information</h4>
                                </div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">First Name</label>
                                        <input type="text" class="form-control w-100" placeholder="First name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Last Name</label>
                                        <input type="text" class="form-control w-100" placeholder="Last name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Address</label>
                                        <input type="text" class="form-control w-100" placeholder="Nepal" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Cite</label>
                                        <input type="text" class="form-control w-100" placeholder="Nepal" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Country</label>
                                        <input type="text" class="form-control w-100" placeholder="Nepal" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Postal Code</label>
                                        <input type="text" class="form-control w-100" placeholder="5468" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <div class="my-car-title d-flex mt-5">
                                <div class="my-cart-number">3</div>
                                <div class="my-cart-order">
                                    <h4>Payment Information</h4>
                                </div>
                            </div>
                            <div class="my-cart-payment">
                                <ul class="mb-0 py-4">
                                    <li>
                                        <span class="
                                    d-flex
                                    justify-content-start justify-content-lg-center
                                    align-items-center
                                    ">
                                    <input type="radio" />
                                    <h5 class="font-weigth-normal mb-0">
                                       Direct Bank Transfer
                                    </h5>
                                 </span>
                                    </li>
                                    <li>
                                        <span class="
                                    d-flex
                                    justify-content-start justify-content-lg-center
                                    align-items-center
                                    ">
                                    <input type="radio" />
                                    <h5 class="font-weigth-normal mb-0">Khalti</h5>
                                 </span>
                                    </li>
                                    <li>
                                        <span class="
                                    d-flex
                                    justify-content-start justify-content-lg-center
                                    align-items-center
                                    ">
                                    <input type="radio" />
                                    <h5 class="font-weigth-normal mb-0">E-sewa</h5>
                                 </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="my-car-title d-flex mb-3">
                                <div class="my-cart-number">4</div>
                                <div class="my-cart-order">
                                    <h4>Confirm Order</h4>
                                </div>
                            </div>
                            <div class="btn_groups-single large-btn my-5 rounded-0">
                                <button class="effect">Confirm</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Checkout Ends -->

@endsection