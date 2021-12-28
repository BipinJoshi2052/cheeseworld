<div class="col-xl-9 col-lg-9 col-md-12 col-12">
  <div class="profile-side-detail-edit">
      <div class="dashboard-content d-flex align-items-center h-100">
        @if(Cart::count() > 0)
          <div class="shopping-cart">
            <form action="" method="post" enctype="multipart/form-data">
              @include('includes.csrf-token')
              @include('pages-message.notify-msg-error')
              <div class="shopping-cart-table">
                  <div class="table-responsive-lg">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th class="cart-description item">Image</th>
                                  <th class="cart-product-name item">Product Name</th>
                                  <th class="cart-product-price item">Price</th>
                                  <th class="cart-qty item">Quantity</th>
                                  <th class="cart-total last-item">Total</th>
                                  <th class="cart-romove item">Remove</th>
                              </tr>
                          </thead>
                          <!-- /thead -->
                          <tbody>
                            @foreach(Cart::items() as $index => $items)
                              <?php 
                                if($items->img_src){
                                  $_cart_img_url = get_image_url($items->img_src);
                                  $_cart_img_alt = 'product';
                                } else {
                                  $_cart_img_url = default_placeholder_img_src();
                                  $_cart_img_alt = 'product';
                                }
                              ?>
                              <tr>
                                  <td class="cart-image">
                                      <a class="entry-thumbnail" href="{{ route('details-page', get_product_slug($items->id)) }}">
                                          <img src="{{ $_cart_img_url }}"
                                              class="img-fluid" alt="{{ $_cart_img_alt }}">
                                      </a>
                                  </td>
                                  <td class="cart-product-name-info">
                                      <h4 class="cart-product-description"><a href="{{ route('details-page', get_product_slug($items->id)) }}">{!! $items->name !!}</a></h4>
                                      <div class="row">
                                          <div class="col-4">
                                              <div class="rating rateit-small"></div>
                                          </div>
                                      </div>
                                      <!-- /.row -->
                                  </td>
                                  <td>
                                    {!! price_html(get_product_price_html_by_filter( $items->price ), get_frontend_selected_currency()) !!}
                                  </td>
                                  <td class="cart-product-quantity">
                                      <div class="quant-input">
                                          <input type="number" class="cart_quantity_input" name="cart_quantity[{{ $index }}]" value="{{ $items->quantity }}" min="1">
                                      </div>
                                  </td>
                                  <td class="cart-product-grand-total"><span
                                          class="cart-grand-total-price">{!! price_html(  get_product_price_html_by_filter(Cart::getRowPrice($items->quantity, $items->price)), get_frontend_selected_currency()) !!}</span>
                                  </td>
                                  <td class="romove-item"><a href="{{ route('removed-item-from-cart', $index)}}" title="cancel"
                                          class="icon cart_quantity_delete delete-extra-padding"><i class="fa fa-trash-o"></i></a>
                                  </td>
                              </tr>
                            @endforeach
                              {{-- <tr>
                                  <td class="cart-image">
                                      <a class="entry-thumbnail" href="detail.html">
                                          <img src="{{ asset('public/frontend/assets/images/product-images/8.jpg') }}"
                                              class="img-fluid">
                                      </a>
                                  </td>
                                  <td class="cart-product-name-info">
                                      <h4 class="cart-product-description"><a href="detail.html">Yoga
                                              Mat</a></h4>
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
                                  <td class="cart-product-grand-total"><span
                                          class="cart-grand-total-price">$300.00</span>
                                  </td>
                                  <td class="romove-item"><a href="#" title="cancel"
                                          class="icon"><i class="fa fa-trash-o"></i></a>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="cart-image">
                                      <a class="entry-thumbnail" href="detail.html">
                                          <img src="{{ asset('public/frontend/assets/images/product-images/9.jpg') }}"
                                              class="img-fluid">
                                      </a>
                                  </td>
                                  <td class="cart-product-name-info">
                                      <h4 class="cart-product-description"><a href="detail.html">Yoga
                                              Mat</a></h4>
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
                                  <td class="cart-product-grand-total"><span
                                          class="cart-grand-total-price">$300.00</span>
                                  </td>
                                  <td class="romove-item"><a href="#" title="cancel"
                                          class="icon"><i class="fa fa-trash-o"></i></a>
                                  </td>
                                  </td>
                              </tr> --}}
                          </tbody>
                          <!-- /tbody -->
                      </table>
                      <div class="d-flex justify-content-around align-items-center w-100 my-3 flex-wrap">
                          {{-- <form
                              class="coupon-field d-flex flex-wrap align-items-center justify-content-center"> --}}
                              <input type="text" placeholder="Apply Coupon Code" class="mr-2" id="apply_coupon_code" name="apply_coupon">
                              <button type="button" class="effect mt-xl-0 mt-md-0 mt-2" name="apply_coupon_post" id="apply_coupon_post">Apply
                                  Coupon</button>
                          {{-- </form> --}}
                          <div class="total-amount font-weight-bold mt-xl-0 mt-md-0 mt-2">
                              Total Amount : <span>{!! price_html(get_product_price_html_by_filter(Cart::getTotal()), get_frontend_selected_currency()) !!}</span>
                          </div>
                      </div>
                  </div>
              </div>
              @include('pages.ajax-pages.cart-total-html')
            </form>
          </div>
        @else
        <h6>No items in your cart..</h6>
        @endif
      </div>
  </div>
</div>