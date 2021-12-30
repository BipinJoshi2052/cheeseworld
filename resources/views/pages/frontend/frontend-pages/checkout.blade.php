@extends('layouts.frontend.master')
@section('title', trans('frontend.shopist_checkout') . ' < ' . get_site_title())
@section('content') 
@section('page-wrapper', 'checkout-page-wrapper' ) 
<?php
    $cart = new App\Cart\Cart();
?> 
<!-- Breadcrumbs -->
    <section id="breadcrumb-wrapper" class="position-relative">
        <div class="image">
            <img src="{{ asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image"
                class="img-fluid">
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
                @if (Cart::count() > 0)
                    <div class="row">
                        <form method="post" action="" id="checkoutForm" enctype="multipart/form-data">
                            @include('includes.csrf-token')
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
                                            @foreach (Cart::items() as $index => $items)
                                                <?php
                                                $checkout_cart_image = $items->img_src ? get_image_url($items->img_src) : default_placeholder_img_src();
                                                ?>
                                                <tr class="text-center">
                                                    <td class="border_trhee">
                                                        <div class="img-block">
                                                            <img src="{{ $checkout_cart_image }}" alt="product" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100">
                                                            <div class="head w-100">
                                                                {!! $items->name !!}
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td class="text_gray">{!! price_html(get_product_price_html_by_filter($items->price)) !!}</td>
                                                    <td class="text_gray">
                                                        <input class="text_gray cart_quantity_input" type="number"
                                                            name="cart_quantity[{{ $index }}]"
                                                            value="{{ $items->quantity }}" min="1" />
                                                    </td>
                                                    <td class="text_gray">$0</td>
                                                    <td class="text_gray">{!! price_html(get_product_price_html_by_filter(Cart::getRowPrice($items->quantity, $items->price))) !!}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th scope="row"></th>
                                                <td class="text_gray" colspan="3"></td>
                                                <td class="text_gray">Total</td>
                                                <td class="text_gray">{!! price_html(get_product_price_html_by_filter(Cart::getCartTotal()), get_frontend_selected_currency()) !!}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- table end  -->
                            </div>
                            {{-- <div class="col-xl-12">
                                <div class="my-car-title d-flex mb-3 mt-4">
                                    <div class="my-cart-number">2</div>
                                    <div class="my-cart-order">
                                        <h4>Shipping Information</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">First Name</label>
                                        <input type="text" class="form-control w-100" name="account_bill_first_name"
                                            id="account_bill_first_name" placeholder="First name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Last Name</label>
                                        <input type="text" class="form-control w-100" name="account_bill_last_name"
                                            id="account_bill_last_name" placeholder="Last name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Address</label>
                                        <input type="text" class="form-control w-100"
                                            name="account_bill_adddress_line_1" id="account_bill_adddress_line_1"
                                            placeholder="Nepal" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">City</label>
                                        <input type="text" class="form-control w-100" name="account_bill_town_or_city"
                                            id="account_bill_town_or_city" placeholder="Nepal" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Country</label>
                                        <select name="account_bill_select_country" id="account_bill_select_country"
                                            class="form-control w-100">
                                            <option value="">{{ trans('frontend.select_country') }}</option>
                                            @foreach (get_country_list() as $key => $val)
                                                @if (old('account_bill_select_country') == $key)
                                                    <option selected value="{{ $key }}">
                                                        {!! $val !!}
                                                    </option>
                                                @else
                                                    <option value="{{ $key }}"> {!! $val !!}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="text_gray mt-3">Postal Code</label>
                                        <input type="text" class="form-control w-100"
                                            name="account_bill_zip_or_postal_code" id="account_bill_zip_or_postal_code"
                                            placeholder="5468" />
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="my-car-title d-flex mt-5">
                                    <div class="my-cart-number">3</div>
                                    <div class="my-cart-order">
                                        <h4>Payment Information</h4>
                                    </div>
                                </div>
                                @if ($payment_method_data['payment_option']['enable_payment_method'] == 'yes' && ($payment_method_data['bacs']['enable_option'] == 'yes' || $payment_method_data['cod']['enable_option'] == 'yes' || $payment_method_data['paypal']['enable_option'] == 'yes' || $payment_method_data['stripe']['enable_option'] == 'yes'))
                                    <div class="my-cart-payment">
                                        <ul class="mb-0 py-4 payment-options">
                                            @if ($payment_method_data['bacs']['enable_option'] == 'yes')
                                                <li>
                                                    <span
                                                        class="d-flex justify-content-start justify-content-lg-center align-items-center">
                                                        <input type="radio" name="payment_option" value="bacs"
                                                            {{ old('payment_option') == 'bacs' ? 'checked' : '' }} />
                                                        <h5 class="font-weigth-normal mb-0">
                                                            {{ $payment_method_data['bacs']['method_title'] }}
                                                        </h5>
                                                    </span>
                                                </li>
                                            @endif
                                            @if ($payment_method_data['cod']['enable_option'] == 'yes')
                                                <li>
                                                    <span
                                                        class="d-flex justify-content-start justify-content-lg-center align-items-center">
                                                        <input type="radio" name="payment_option" value="cod"
                                                            {{ old('payment_option') == 'cod' ? 'checked' : '' }} />
                                                        <h5 class="font-weigth-normal mb-0">
                                                            {{ $payment_method_data['cod']['method_title'] }}
                                                        </h5>
                                                    </span>
                                                </li>
                                            @endif
                                            @if ($payment_method_data['paypal']['enable_option'] == 'yes')
                                                <li>
                                                    <span
                                                        class="d-flex justify-content-start justify-content-lg-center align-items-center">
                                                        <input type="radio" name="payment_option" value="paypal"
                                                            {{ old('payment_option') == 'paypal' ? 'checked' : '' }} />
                                                        <h5 class="font-weigth-normal mb-0">
                                                            {{ $payment_method_data['paypal']['method_title'] }}
                                                        </h5>
                                                    </span>
                                                </li>
                                            @endif
                                            @if ($payment_method_data['esewa']['enable_option'] == 'yes')
                                                <li>
                                                    <span
                                                        class="d-flex justify-content-start justify-content-lg-center align-items-center">
                                                        <input type="radio" name="payment_option" value="esewa"
                                                            {{ old('payment_option') == 'esewa' ? 'checked' : '' }} />
                                                        <h5 class="font-weigth-normal mb-0">
                                                            {{ $payment_method_data['esewa']['method_title'] }}
                                                        </h5>
                                                    </span>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="my-car-title d-flex mb-3">
                                    <div class="my-cart-number">4</div>
                                    <div class="my-cart-order">
                                        <h4>Confirm Order</h4>
                                    </div>
                                </div>
                                <div class="btn_groups-single large-btn my-5 rounded-0">
                                    <button name="checkout_proceed" class="submit place-order effect" type="submit"
                                        value="checkout_proceed">Confirm</button>
                                </div>
                            </div>
                            <input type="hidden" id="selected_user_mode" name="selected_user_mode">
                            <input type="hidden" id="is_user_login" name="is_user_login"
                                value="{{ $is_user_login }}">
                            <input type="hidden" id="selected_payment_method" name="selected_payment_method">
                            @if (!empty($login_user_account_data) && !empty($login_user_account_data->address_details))
                                <input type="hidden" id="is_login_user_address_exists"
                                    name="is_login_user_address_exists" value="address_added">
                            @endif
                        </form>
                        <form action="https://uat.esewa.com.np/epay/main" method="POST" id="esewaForm">
                            <input value="" name="tAmt" type="hidden" id="finalTotalAmount">
                            <input value="" name="amt" type="hidden" id="totalAmount">
                            <input value="" name="txAmt" type="hidden" id="taxAmount">
                            <input value="0" name="psc" type="hidden" id="serviceCharge">
                            <input value="0" name="pdc" type="hidden" id="shippingCost">
                            {{-- <input value="{{ $payment_method_data['esewa']['esewa_merchant_id'] }}" name="scd" type="hidden"> --}}
                            <input value="EPAYTEST" name="scd" type="hidden">
                            <input value="" name="pid" type="hidden" id="finalOrderId">
                            <input value="{{ route('esewa-verify') }}?q=su" type="hidden" name="su">
                            <input value="{{ route('esewa-verify') }}?q=fu" type="hidden" name="fu">
                            <button type="submit" class="btn btn-secondary d-none">Place Order</button>
                        </form>
                    </div>

                @else
                    <div class="row">
                        <p>@include('pages-message.notify-msg-error')</p>
                        <h2 class="cart-shopping-label">{{ trans('frontend.checkout_process') }}</h2>
                        <div class="empty-cart-msg">{{ trans('frontend.empty_cart_msg') }}</div>
                        <div class="cart-return-shop"><a class="btn btn-secondary check_out"
                                href="{{ route('shop-page') }}">{{ trans('frontend.return_to_shop') }}</a></div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!--Checkout Ends -->

@endsection
@section('script')
    <script>
        function createOrder() {
            var url = "{{ route('checkout-process') }}";
            var data = $("#checkoutForm").serialize();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('checkout-process') }}",
                type: 'post',
                data: $("#checkoutForm").serialize() + "&checkout_proceed=checkout_proceed",
                beforeSend: function() {
                    $('#shadow-layer, .esewa-payment-loader').show();
                },
                success: function(data) {
                    // return true;
                    $("#finalTotalAmount").val(data.final_total);
                    $("#totalAmount").val(data.order_total);
                    $("#shippingCost").val(data.shipping);
                    $("#taxAmount").val(data.order_tax);
                    $("#finalOrderId").val(data.orderId);
                    $("#esewaForm").submit();
                },
                complete: function() {
                    $('#shadow-layer, .esewa-payment-loader').hide();
                },
            });
        }
    </script>
@endsection
