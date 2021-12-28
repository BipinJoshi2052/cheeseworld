@extends('layouts.frontend.master')
@section('title',  trans('frontend.shopist_order_received_title') .' < '. get_site_title() )
@section('page-wrapper', 'login-register-page-wrapper')
@section('content')
  <!-- ORDER RECEIVED START -->
  <section id="order_received" class="py-5">
    <div class="container">
       <div class="row">
           <div class="col-md-10 m-auto">
           <div class="row_wrapper">
            <div class="row">
              
              @if(count($order_details_for_thank_you_page) > 0)
                <div class="col-lg-12">
                  <div class="order-received-title-msg">
                    <h4>{{ trans('frontend.order_received') }}</h4>
                    <p>{{ trans('frontend.thank_you_msg') }}</p>
                  </div>
                    <div class="invoice-title">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ORDER NUMBER</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total</th>
                                <th scope="col">Payment Method</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                
                                <td>#{!! $order_details_for_thank_you_page['order_id'] !!} 
                                  @if(isset($order_details_for_thank_you_page['_payment_details']['method_instructions']))
                                  {!! $order_details_for_thank_you_page['_payment_details']['method_instructions'] !!}
                                  @endif
                                </td>
                                <td>{!! $order_details_for_thank_you_page['order_date'] !!}</td>
                                <td>{!! price_html( $order_details_for_thank_you_page['_final_order_total'], $order_details_for_thank_you_page['_order_currency'] ) !!}</td>
                                <td>{!! get_payment_method_title($order_details_for_thank_you_page['_payment_method']) !!}</td>
                              </tr>
                             
                            </tbody>
                          </table>
                    </div>
                   
                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <address>
                                <address class="side_block">
                                    <h5 class="mb-3">Billing Address:</h5>
                                      @if(!empty($order_details_for_thank_you_page['customer_address']))
                                        <strong class="mb-2 d-inline-block">Name:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_billing_first_name'].' '. $order_details_for_thank_you_page['customer_address']['_billing_last_name']!!}</small> <br>
                                        @if($order_details_for_thank_you_page['customer_address']['_billing_company'])
                                        <strong class="mb-2 d-inline-block">Company:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_billing_company'] !!}</small><br>
                                        @endif
                                        <strong class="mb-2 d-inline-block">Address:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_billing_address_1'] !!}</small><br>
                                        <strong class="mb-2 d-inline-block">City:</strong>  <small>{!! $order_details_for_thank_you_page['customer_address']['_billing_city'] !!}</small><br>
                                        <strong class="mb-2 d-inline-block">PostCode:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_billing_postcode'] !!}</small><br>
                                        <strong class="mb-2 d-inline-block">Country:</strong> <small>{!! get_country_by_code( $order_details_for_thank_you_page['customer_address']['_billing_country'] ) !!}</small><br>
                                        <strong class="mb-2 d-inline-block">Phone Number:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_billing_phone'] !!}</small><br>
                                        <strong class="mb-2 d-inline-block">Email Address:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_billing_email'] !!}</small><br>
                                      @endif 
                                    </address>
                            </address>
                        </div>
                        <div class="col-lg-6 text-right">
                          <address class="side_block">
                            <h5 class="mb-3">Shipping Address:</h5>
                              @if(!empty($order_details_for_thank_you_page['customer_address']))
                                <strong class="mb-2 d-inline-block">Name:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_shipping_first_name'].' '. $order_details_for_thank_you_page['customer_address']['_shipping_last_name']!!}</small> <br>
                                @if($order_details_for_thank_you_page['customer_address']['_shipping_company'])
                                <strong class="mb-2 d-inline-block">Company:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_shipping_company'] !!}</small><br>
                                @endif
                                <strong class="mb-2 d-inline-block">Address:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_shipping_address_1'] !!}</small><br>
                                <strong class="mb-2 d-inline-block">City:</strong>  <small>{!! $order_details_for_thank_you_page['customer_address']['_shipping_city'] !!}</small><br>
                                <strong class="mb-2 d-inline-block">PostCode:</strong> <small>{!! $order_details_for_thank_you_page['customer_address']['_shipping_postcode'] !!}</small><br>
                                <strong class="mb-2 d-inline-block">Country:</strong><small>{!! get_country_by_code( $order_details_for_thank_you_page['customer_address']['_shipping_country'] ) !!}</small><br>
                                <strong class="mb-2 d-inline-block">Phone Number:</strong><small>{!! $order_details_for_thank_you_page['customer_address']['_shipping_phone'] !!}</small><br>
                                <strong class="mb-2 d-inline-block">Email Address:</strong><small>{!! $order_details_for_thank_you_page['customer_address']['_shipping_email'] !!}</small><br>
                              @endif
                          </address>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-12">
                    <div class="panel panel-default mt-2">
                        <div class="panel-heading">
                            <h6 class="panel-title mb-0"><strong>Order Details</strong></h6>
                        </div>
                        <div class="panel-body">
                          @if(count($order_details_for_thank_you_page['ordered_items']) > 0)
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <td><strong>Item</strong></td>
                                            <td class="text-center"><strong>Price</strong></td>
                                            <td class="text-center"><strong>Quantity</strong></td>
                                            <td class="text-right"><strong>Totals</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order_details_for_thank_you_page['ordered_items'] as $items)
                                        <tr>
                                            <td>{!! $items['name'] !!}</td>
                                            <td class="text-center">{!! price_html( $items['order_price'], $order_details_for_thank_you_page['_order_currency'] ) !!}</td>
                                            <td class="text-center">{!! $items['quantity'] !!}</td>
                                            <td class="text-right">{!! price_html( ($items['quantity']*$items['order_price']), $order_details_for_thank_you_page['_order_currency'] ) !!}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                          @endif
                        </div>
                    </div>
                </div>
              @else
                <h5>{{ trans('frontend.no_content_yet') }}</h5>
              @endif
            </div>
           </div>
          
           
           </div>
       </div>
    </div>
 </section>
  <!-- ORDER RECEIVED END -->
@endsection  