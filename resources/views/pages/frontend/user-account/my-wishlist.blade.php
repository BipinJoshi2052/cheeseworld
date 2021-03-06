@section('style')
    <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
@endsection
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
  <div class="image">
      <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg ') }}" alt="breadcrumb-image" class="img-fluid">
  </div>
  <div class="overlay position-absolute">
      <div class="title p-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home-page') }}"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
          </ol>
        </nav>
      </div>
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
                                        @foreach($frontend_account_details->wishlists_details as $items)
                                        <?php 
                                          if(get_product_image($items) && get_product_image($items) != '/images/no-image.png'){
                                            $wishlist_product_image = get_image_url(get_product_image($items));
                                          } else {
                                            $wishlist_product_image = default_placeholder_img_src();
                                          }
                                        ?>
                                          <tr class="single-product-add-to-cart">
                                              <td class="cart-image">
                                                  <a class="entry-thumbnail" href="detail.html">
                                                      <img src="{{ $wishlist_product_image }}" class="img-fluid">
                                                  </a>
                                              </td>
                                              <td class="cart-product-name-info">
                                                  <h4 class="cart-product-description"><a href="{{ route('details-page', get_product_slug($items)) }}">{!! get_product_title($items) !!}</a></h4>
                                                  <div class="row">
                                                      <div class="col-4">
                                                          <div class="rating rateit-small"></div>
                                                      </div>
                                                  </div>
                                                  <!-- /.row -->
                                              </td>
                                              <td class="cart-product-quantity">
                                                  <div class="quant-input">
                                                    {!! get_product_availability($items) !!}
                                                  </div>
                                              </td>
                                              <td class="cart-product-grand-total">
                                                  <span class="cart-grand-total-price">
                                                    {!! price_html(get_product_price($items), get_frontend_selected_currency()) !!}
                                                  </span>
                                              </td>
                                              <td class="romove-item"><a href="#" data-id="{{ $items }}" title="cancel" class="icon delete_item_from_wishlist"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                              <td>
                                                  <button class="effect add-to-cart-bg" data-id="{{ $items }}">Add to Cart</button>
                                              </td>
                                          </tr>
                                        @endforeach

                                      </tbody>
                                      <!-- /tbody -->
                                  </table>

                              </div>
                          </div>

                      </div>
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
@section('script')
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
@endsection