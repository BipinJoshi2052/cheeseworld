@section('style')
    <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
@endsection
@if( count($order_details_by_order_id) > 0)
  <!-- ORDER RECEIVED START -->
  <section id="cart-wrapper" class="py-3">
    <div class="container">
      <div class="row py-xl-5 py-md-3 py-0">
        @include('includes.frontend.user-dashboard')
        <div class="col-xl-9 col-lg-9 col-md-12 col-12">
          <div class="profile-side-detail-edit">
            <div class="dashboard-content h-100">
              <div>
                <p>Order Number: #{!! $order_details_by_order_id['order_id'] !!}</p>
                <p>Order Data: {!! $order_details_by_order_id['order_date'] !!}</p>
                <p>Total: {!! price_html( $order_details_by_order_id['_final_order_total'], $order_details_by_order_id['_order_currency'] ) !!}</p>
                <p>Payment Method: {{ get_payment_method_title($order_details_by_order_id['_payment_method']) }}</p>
                <p>
                  @if(isset($order_details_by_order_id['_payment_details']['method_instructions']))
                  {{ $order_details_by_order_id['_payment_details']['method_instructions'] }}
                  @endif
                </p>  
              </div>          
              @if(count($order_details_by_order_id['ordered_items'])>0)
              <div class="shopping-cart mt-5">
                <div class="shopping-cart-table">
                  <div class="table-responsive-lg">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Totals</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($order_details_by_order_id['ordered_items'] as $items)
                        <tr>
                          <td>{!! $items['name'] !!}</td>
                          <td>{!! price_html( $items['order_price'], $order_details_by_order_id['_order_currency'] ) !!}</td>
                          <td>{!! $items['quantity'] !!}</td>
                          <td>{!! price_html( ($items['quantity']*$items['order_price']), $order_details_by_order_id['_order_currency'] ) !!}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              @endif
              
              <div class="d-flex justify-content-between mt-5">
                <address class="side_block">
                  <h5 class="mb-3">Shipping Address:</h5>
                    @if(!empty($order_details_by_order_id['customer_address']))
                      <strong class="mb-2 d-inline-block">Name:</strong> <small>{!! $order_details_by_order_id['customer_address']['_shipping_first_name'].' '. $order_details_by_order_id['customer_address']['_shipping_last_name']!!}</small> <br>
                      @if($order_details_by_order_id['customer_address']['_shipping_company'])
                      <strong class="mb-2 d-inline-block">Company:</strong> <small>{!! $order_details_by_order_id['customer_address']['_shipping_company'] !!}</small><br>
                      @endif
                      <strong class="mb-2 d-inline-block">Address:</strong> <small>{!! $order_details_by_order_id['customer_address']['_shipping_address_1'] !!}</small><br>
                      <strong class="mb-2 d-inline-block">City:</strong>  <small>{!! $order_details_by_order_id['customer_address']['_shipping_city'] !!}</small><br>
                      <strong class="mb-2 d-inline-block">PostCode:</strong> <small>{!! $order_details_by_order_id['customer_address']['_shipping_postcode'] !!}</small><br>
                      <strong class="mb-2 d-inline-block">Country:</strong><small>{!! get_country_by_code( $order_details_by_order_id['customer_address']['_shipping_country'] ) !!}</small><br>
                      <strong class="mb-2 d-inline-block">Phone Number:</strong><small>{!! $order_details_by_order_id['customer_address']['_shipping_phone'] !!}</small><br>
                      <strong class="mb-2 d-inline-block">Email Address:</strong><small>{!! $order_details_by_order_id['customer_address']['_shipping_email'] !!}</small><br>
                    @endif
                </address>    
                    <address>
                  <address class="side_block">
                      <h5 class="mb-3">Billing Address:</h5>
                        @if(!empty($order_details_by_order_id['customer_address']))
                          <strong class="mb-2 d-inline-block">Name:</strong> <small>{!! $order_details_by_order_id['customer_address']['_billing_first_name'].' '. $order_details_by_order_id['customer_address']['_billing_last_name']!!}</small> <br>
                          @if($order_details_by_order_id['customer_address']['_billing_company'])
                          <strong class="mb-2 d-inline-block">Company:</strong> <small>{!! $order_details_by_order_id['customer_address']['_billing_company'] !!}</small><br>
                          @endif
                          <strong class="mb-2 d-inline-block">Address:</strong> <small>{!! $order_details_by_order_id['customer_address']['_billing_address_1'] !!}</small><br>
                          <strong class="mb-2 d-inline-block">City:</strong>  <small>{!! $order_details_by_order_id['customer_address']['_billing_city'] !!}</small><br>
                          <strong class="mb-2 d-inline-block">PostCode:</strong> <small>{!! $order_details_by_order_id['customer_address']['_billing_postcode'] !!}</small><br>
                          <strong class="mb-2 d-inline-block">Country:</strong> <small>{!! get_country_by_code( $order_details_by_order_id['customer_address']['_billing_country'] ) !!}</small><br>
                          <strong class="mb-2 d-inline-block">Phone Number:</strong> <small>{!! $order_details_by_order_id['customer_address']['_billing_phone'] !!}</small><br>
                          <strong class="mb-2 d-inline-block">Email Address:</strong> <small>{!! $order_details_by_order_id['customer_address']['_billing_email'] !!}</small><br>
                        @endif 
                      </address>
              </address>
              </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
 </section>
  <!-- ORDER RECEIVED END --> 
@endif

@section('script')
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
@endsection