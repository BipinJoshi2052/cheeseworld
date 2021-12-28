@section('style')
  <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
  <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
@endsection


<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
  <div class="image">
      <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image" class="img-fluid">
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
          @include('includes.frontend.user-dashboard')
          <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
              <div class="dashboard-content d-flex align-items-center">
                  <div class="shopping-cart-table">
                      <div class="table-responsive-xl">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col" class="cart-product-id item">Order ID </th>
                                      <th scope="col" class="cart-product-date item">Date </th>
                                      {{-- <th scope="col" class="cart-description item">Image</th>
                                      <th scope="col" class="cart-product-name item">Product Name</th>
                                      <th scope="col" class="cart-qty item">Quantity</th> --}}
                                      <th scope="col" class="cart-total last-item">Total</th>
                                      <th scope="col" class="cart-total last-item">Status</th>
                                      <th scope="col" class="cart-romove item"></th>
                                  </tr>
                              </thead>
                              <!-- /thead -->
                              <tbody>
                                @if(count($orders_list_data) > 0)
                                  @foreach($orders_list_data as $row)
                                    <tr>
                                      <td class="cart-product-order-id">
                                          <span>#{!! $row["_post_id"] !!}</span>
                                      </td>
                                      <td class="cart-product-order-date">
                                          <span>{!! Carbon\Carbon::parse($row['_order_date'])->format('F d, Y') !!}</span>
                                      </td>
                                      {{-- <td class="cart-image">
                                          <a class="entry-thumbnail" href="detail.html">
                                              <img src="{{ URL::asset('public/frontend/assets/images/product-images/8.jpg') }}" class="img-fluid">
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
                                      </td> --}}
                                      <td class="cart-product-grand-total">
                                        <span class="cart-grand-total-price">
                                          {!! price_html($row['_final_order_total'], $row['_order_currency']) !!}
                                        </span>
                                      </td>
                                      <td class="cart-product-order-date">
                                        <?php 
                                          $row_order_status = $row['_order_status'];
                                          if($row_order_status == 'on-hold'){
                                            $bgColor = "bg-hippie-green";
                                          } elseif ($row_order_status == 'pending') {
                                            $bgColor = "bg-purple";
                                          } elseif ($row_order_status == 'processing') {
                                            $bgColor = "bg-navy";
                                          } elseif ($row_order_status == 'completed') {
                                            $bgColor = "bg-success";
                                          } elseif ($row_order_status == 'cancelled') {
                                            $bgColor = "bg-danger";
                                          } elseif ($row_order_status == 'refunded') {
                                            $bgColor = "bg-chestnut";
                                          } elseif ($row_order_status == 'shipping') {
                                            $bgColor = "bg-teal";
                                          }
                                        ?>
                                          <span class="{{ $bgColor }} text-white px-3 py-2">
                                            {!! $row['_order_status'] !!}
                                          </span>
                                      </td>
                                      <td class="view-item"><a href="#" title="cancel" class="icon">
                                              View</a>
                                      </td>
                                    </tr>
                                  @endforeach
                                @endif
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
