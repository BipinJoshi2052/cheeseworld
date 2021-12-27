<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
  <div class="image">
      <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg ') }}" alt="breadcrumb-image" class="img-fluid">
  </div>
  <div class="overlay position-absolute">
      <div class="title p-4">Product Listing</div>
  </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- wishlist -->
<!-- Cart -->
<section id="cart-wrapper" class="py-3">
  <div class="container">
      <div class="row py-xl-5 py-md-3 py-0">
          @include('includes.frontend.user-dashboard')
          <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
              <div class="profile-side-detail-edit">
                  <div class="dashboard-content d-flex align-items-center h-100">
                    @if(!empty($frontend_account_details) && $frontend_account_details->wishlists_details)
                      <div class="shopping-cart">
                          <div class="shopping-cart-table">
                              <div class="table-responsive-lg">
                                  <table class="table">
                                      <thead>
                                          <tr>
                                              <th class="cart-description item">Image</th>
                                              <th class="cart-product-name item">Product Name</th>
                                              <th class="cart-qty item">Availability</th>
                                              <th class="cart-total last-item">Price</th>
                                              <th class="cart-romove item">Remove</th>
                                          </tr>
                                      </thead>
                                      <!-- /thead -->
                                      <tbody>
                                          <tr>
                                              <td class="cart-image">
                                                  <a class="entry-thumbnail" href="detail.html">
                                                      <img src="{{ URL::asset('public/frontend/assets/images/product-images/7.jpg ') }}" class="img-fluid">
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
                                              <td class="cart-product-grand-total">
                                                  <span class="cart-grand-total-price">$300.00</span>
                                              </td>
                                              <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                          class="fa fa-trash-o"></i></a>
                                              </td>
                                              <td>
                                                  <button class="effect">Add to Cart</button>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="cart-image">
                                                  <a class="entry-thumbnail" href="detail.html">
                                                      <img src="{{ URL::asset('public/frontend/assets/images/product-images/7.jpg ') }}" class="img-fluid">
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
                                              <td class="cart-product-grand-total">
                                                  <span class="cart-grand-total-price">$300.00</span>
                                              </td>
                                              <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                          class="fa fa-trash-o"></i></a>
                                              </td>
                                              <td>
                                                  <button class="effect">Add to Cart</button>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="cart-image">
                                                  <a class="entry-thumbnail" href="detail.html">
                                                      <img src="{{ URL::asset('public/frontend/assets/images/product-images/7.jpg ') }}" class="img-fluid">
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
                                              <td class="cart-product-grand-total">
                                                  <span class="cart-grand-total-price">$300.00</span>
                                              </td>
                                              <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                          class="fa fa-trash-o"></i></a>
                                              </td>
                                              <td>
                                                  <button class="effect">Add to Cart</button>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="cart-image">
                                                  <a class="entry-thumbnail" href="detail.html">
                                                      <img src="{{ URL::asset('public/frontend/assets/images/product-images/7.jpg ') }}" class="img-fluid">
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
                                              <td class="cart-product-grand-total">
                                                  <span class="cart-grand-total-price">$300.00</span>
                                              </td>
                                              <td class="romove-item"><a href="#" title="cancel" class="icon"><i
                                          class="fa fa-trash-o"></i></a>
                                              </td>
                                              <td>
                                                  <button class="effect">Add to Cart</button>
                                              </td>
                                          </tr>

                                      </tbody>
                                      <!-- /tbody -->
                                  </table>

                              </div>
                          </div>

                      </div>
                    @endif
                    @else
                      <p>{{ trans('frontend.no_saved_items_yet_label') }}</p>
                    @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Cart Ends -->
<!-- wishlist Ends -->