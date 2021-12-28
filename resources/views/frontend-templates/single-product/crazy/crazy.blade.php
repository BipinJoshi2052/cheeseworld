<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image"
            class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Product Listing</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- Product Detail  -->
<section id="product-detail-wrapper" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                <div class="product-carousel">
                    <!-- Swiper and EasyZoom plugins start -->
                    <div class="swiper-container gallery-top" style="height: 400px">
                        <div class="swiper-wrapper">
                            @foreach ($single_product_details['_product_related_images_url']->product_gallery_images as $key => $row)
                                <?php
                                if (!empty($row->url) && basename($row->url) !== 'no-image.png') {
                                    $_image_url = get_image_url($row->url);
                                } else {
                                    $_image_url = default_placeholder_img_src();
                                }
                                ?>
                                <div class="swiper-slide easyzoom easyzoom--overlay">
                                    <a href="{{ $_image_url }}">
                                        <img src="{{ $_image_url }}" alt="slider-image" class="img-fluid" />
                                    </a>
                                </div>
                            @endforeach
                            {{-- <div class="swiper-slide easyzoom easyzoom--overlay">
                              <a href="{{ URL::asset('public/frontend/assets/images/product-images/2.jpg') }}">
                                  <img src="{{ URL::asset('public/frontend/assets/images/product-images/2.jpg') }}" alt="slider-image" class="img-fluid" />
                              </a>
                          </div>
                          <div class="swiper-slide easyzoom easyzoom--overlay">
                              <a href="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}">
                                  <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="slider-image" class="img-fluid" />
                              </a>
                          </div>
                          <div class="swiper-slide easyzoom easyzoom--overlay">
                              <a href="{{ URL::asset('public/frontend/assets/images/product-images/4.jpg') }}">
                                  <img src="{{ URL::asset('public/frontend/assets/images/product-images/4.jpg') }}" alt="slider-image" class="img-fluid" />
                              </a>
                          </div>
                          <div class="swiper-slide easyzoom easyzoom--overlay">
                              <a href="{{ URL::asset('public/frontend/assets/images/product-images/5.jpg') }}">
                                  <img src="{{ URL::asset('public/frontend/assets/images/product-images/5.jpg') }}" alt="slider-image" class="img-fluid" />
                              </a>
                          </div> --}}
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach ($single_product_details['_product_related_images_url']->product_gallery_images as $key => $row)
                                <?php
                                if (!empty($row->url) && basename($row->url) !== 'no-image.png') {
                                    $_image_url = get_image_url($row->url);
                                } else {
                                    $_image_url = default_placeholder_img_src();
                                }
                                ?>
                                <div class="swiper-slide">
                                    <img src="{{ $_image_url }}" alt="slider-image" class="img-fluid" />
                                </div>
                            @endforeach
                            {{-- <div class="swiper-slide">
                              <img src="{{ URL::asset('public/frontend/assets/images/product-images/2.jpg') }}" alt="slider-image" class="img-fluid" />
                          </div>
                          <div class="swiper-slide">
                              <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="slider-image" class="img-fluid" />
                          </div>
                          <div class="swiper-slide">
                              <img src="{{ URL::asset('public/frontend/assets/images/product-images/4.jpg') }}" alt="slider-image" class="img-fluid" />
                          </div>
                          <div class="swiper-slide">
                              <img src="{{ URL::asset('public/frontend/assets/images/product-images/5.jpg') }}" alt="slider-image" class="img-fluid" />
                          </div> --}}
                        </div>
                    </div>
                    <!-- Swiper and EasyZoom plugins end -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                <div class="d-flex justify-content-center h-100 product-detail flex-column">
                    <div class="about mb-3">
                        @if ($single_product_details['_product_enable_reviews'] == 'yes')
                            <div class="rating-wrapper mb-2">
                                <div class="rating">
                                    <div class="rating-upper"
                                        style="width: {{ isset($comments_rating_details['percentage']) && $comments_rating_details['percentage'] ? $comments_rating_details['percentage'] : '0' }}%">
                                        <span>★</span>
                                        <span>★</span>
                                        <span>★</span>
                                        <span>★</span>
                                        <span>★</span>
                                    </div>
                                    <div class="rating-lower">
                                        <span>★</span>
                                        <span>★</span>
                                        <span>★</span>
                                        <span>★</span>
                                        <span>★</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="d-flex flex-row align-items-center mb-2">
                            <h1 class="font-weight-bold m-0">{{ $single_product_details['post_title'] }}</h1>
                        </div>
                        <div class="product-price d-flex ">
                            <?php
                            if (get_product_type($single_product_details['id']) == 'simple_product') {
                                if (!is_null($single_product_details['offer_price'])) {
                                    $_offer_price = price_html($single_product_details['offer_price']);
                                }
                                $_solid_price = price_html($single_product_details['solid_price']);
                            }
                            ?>
                            @if (!is_null($single_product_details['offer_price']))
                                <div class="first-price mr-2">{!! $_solid_price !!}</div>
                                <div class="second-price">{!! $_offer_price !!}</div>
                            @else
                                <div class="second-price">{!! $_solid_price !!}</div>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <h5>Description</h5>

                        {!! string_decode($single_product_details['post_content']) !!}

                    </div>
                    <form class="product-types">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Weight</label>
                                <select id="size" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>1kg</option>
                                    <option>2kg</option>
                                    <option>3kg</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="quantity mb-3">
                                    <label>Quantity</label>
                                    <div>
                                        <?php $qty = ''; if($single_product_details['_product_manage_stock_back_to_order'] == 'not_allow' && $single_product_details['post_stock_qty']>0){?>
                                        <?php $qty = $single_product_details['post_stock_qty'];}?>
                                        <input type="number" id="quantity" name="quant[1]" placeholder="1" value="1"
                                            min="1" max="{{ $qty }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="effect add-to-cart-bg" data-id="{{ $single_product_details['id'] }}">Add to
                            Cart</button>
                        <button class="effect">Buy Now</button>
                    </form>
                </div>
            </div>
            <div class="mx-auto">
                @include('pages-message.notify-msg-success')
                @include('pages-message.notify-msg-error')
                @include('pages-message.form-submit')
            </div>
            <div class="col-12 mt-3">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                            aria-controls="first" aria-selected="true">Additional Information</a>
                        <a class="nav-item nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab"
                            aria-controls="second" aria-selected="false">Reviews {!! isset($comments_details) && $comments_details ? '<span>(' . count((array) $comments_details) . ')</span>' : '' !!} </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active p-3 w-75 mx-auto" id="first" role="tabpanel"
                        aria-labelledby="first-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi,
                        non praesentium corrupti illum, repudiandae adipisci, fuga nesciunt deserunt ipsam inventore ad
                        fugit beatae necessitatibus maiores mollitia rem officiis tenetur!
                        Corrupti.
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <h4>Milky Italian Mozzarella</h4>
                                <tbody>
                                    <tr>
                                        <th>Weight</th>
                                        <td>2 kg</td>
                                    </tr>
                                    <tr>
                                        <th>Ingredients</th>
                                        <td>Cheese</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-12 user-comment mx-auto px-xl-5 px-2 py-4">
                                <div class="col-12 mb-4 text-center">
                                    <h2 class="font-weight-bold mb-xl-4 mb-md-3 mb-2">Add a comment</h2>
                                </div>
                                <div class="col-xl-12">
                                    <form method="post" action="">
                                        <div class="row">
                                            @csrf
                                            <input type="hidden" name="comments_target" id="comments_target"
                                                value="product">
                                            <input type="hidden" name="selected_rating_value" id="selected_rating_value"
                                                value="">
                                            <input type="hidden" name="object_id" id="object_id"
                                                value="{{ $single_product_details['id'] }}">
                                            <div class="col-12 my-md-5 my-4">
                                                <div class="col-text-area d-flex justify-content-center">
                                                    <textarea class="w-100 p-3 rounded-0" placeholder="Add Comment"
                                                        name="product_review_content"
                                                        id="product_review_content"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rating-select d-flex justify-content-center mb-4">
                                                    <div class="btn btn-light btn-sm" data-rating_value="1"><span
                                                            class="fa fa-star"></span></div>
                                                    <div class="btn btn-light btn-sm" data-rating_value="2"><span
                                                            class="fa fa-star"></span></div>
                                                    <div class="btn btn-light btn-sm" data-rating_value="3"><span
                                                            class="fa fa-star"></span></div>
                                                    <div class="btn btn-light btn-sm" data-rating_value="4"><span
                                                            class="fa fa-star"></span></div>
                                                    <div class="btn btn-light btn-sm" data-rating_value="5"><span
                                                            class="fa fa-star"></span></div>
                                                </div>
                                            </div>
                                            <div class="button-wrapper mx-auto mb-3">
                                                <button class="effect px-4" name="review_submit" id="review_submit">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- User Comments -->
                            <div class="col-xl-4 col-lg-4 col-12  p-4 my-3 mx-auto bg-light">
                                <div class="comments-content">
                                    @if (isset($comments_details) && $comments_details)
                                        @foreach ($comments_details as $review)
                                            <div class="content">
                                                <h5 class="mb-2">{{ $review->display_name }}</h5>
                                                <div class="rating">
                                                    <div class="rating-upper"
                                                        style="width: {{ $review->percentage }}%">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class="rating-lower">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <p>{{ $review->content }}</p>
                                                <small class="review-date"></small>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="content">
                                            <h5 class="mb-2 text-muted">No review</h5>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- User Comments Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Product Detail Ends -->
<!-- Product Listing -->
@if (count($related_items) > 0)
    <section id="product-listing-wrapper">
        <div class="container">
            <div class="product-lists padding">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="heading d-flex justify-content-center align-items-center text-center mb-3 flex-wrap">
                            <div class="head">
                                <h2>Related Products</h2>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($related_items as $products)
                        <?php
                        $reviews = get_comments_rating_details($products['id'], 'product');
                        $reviews_settings = get_reviews_settings_data($products['id']);
                        if ($products['_product_related_images_url']->product_image) {
                            $_related_img_url = get_image_url($products['_product_related_images_url']->product_image);
                            $_related_img_alt = basename($products['_product_related_images_url']->product_image);
                        } else {
                            $_related_img_url = default_placeholder_img_src();
                            $_related_img_alt = '';
                        }
                        ?>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                            <div class="product-grid-item">
                                <div class="product-grid-image">
                                    <a href="#">
                                        <img class="pic-1" src="{{ $_related_img_url }}"
                                            alt="{{ $_related_img_alt }}">
                                    </a>
                                    <ul class="social single-product-add-to-cart">
                                        <li>
                                            <a href="" data-id="{{ $products['id'] }}"
                                                class="fa fa-shopping-bag product-wishlist"></a>
                                        </li>
                                        <li>
                                            <a href="" data-id="{{ $products['id'] }}"
                                                class="fa fa-shopping-cart add-to-cart-bg"></a>
                                        </li>
                                    </ul>
                                    {{-- <span class="product-discount-label">-20%</span> --}}
                                </div>
                                <div class="product-content">
                                    <h3 class="title text-center">
                                        <a href="{{ route('details-page', $products['post_slug']) }}"
                                            class="font-weight-bold">{!! get_product_title($products['id']) !!}</a>
                                    </h3>
                                    <div class="price text-center mb-3">
                                        {!! price_html(get_product_price($products['id']), get_frontend_selected_currency()) !!}
                                        {{-- <span>£ 10.00</span> --}}
                                    </div>
                                    <a class="all-deals effect"
                                        href="{{ route('details-page', $products['post_slug']) }}">View Product <i
                                            class="fa fa-angle-right icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                    <div class="product-grid-item">
                        <div class="product-grid-image">
                            <a href="#">
                                <img class="pic-1"
                                    src="{{ URL::asset('public/frontend/assets/images/product-images/2.jpg') }}">
                            </a>
                            <ul class="social">
                                <li>
                                    <a href="" class="fa fa-shopping-bag"></a>
                                </li>
                                <li>
                                    <a href="" class="fa fa-shopping-cart"></a>
                                </li>
                            </ul>
                            <span class="product-discount-label">-20%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title text-center">
                                <a href="#" class="font-weight-bold">Cheese Chicken Grill </a>
                            </h3>
                            <div class="price text-center mb-3">
                                £ 8.00
                                <span>£ 10.00</span>
                            </div>
                            <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                    <div class="product-grid-item">
                        <div class="product-grid-image">
                            <a href="#">
                                <img class="pic-1"
                                    src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}">
                            </a>
                            <ul class="social">
                                <li>
                                    <a href="" class="fa fa-shopping-bag"></a>
                                </li>
                                <li>
                                    <a href="" class="fa fa-shopping-cart"></a>
                                </li>
                            </ul>
                            <span class="product-discount-label">-20%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title text-center">
                                <a href="#" class="font-weight-bold">Cheese Chicken Grill </a>
                            </h3>
                            <div class="price text-center mb-3">
                                £ 8.00
                                <span>£ 10.00</span>
                            </div>
                            <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mt-4">
                    <div class="product-grid-item">
                        <div class="product-grid-image">
                            <a href="#">
                                <img class="pic-1"
                                    src="{{ URL::asset('public/frontend/assets/images/product-images/4.jpg') }}">
                            </a>
                            <ul class="social">
                                <li>
                                    <a href="" class="fa fa-shopping-bag"></a>
                                </li>
                                <li>
                                    <a href="" class="fa fa-shopping-cart"></a>
                                </li>
                            </ul>
                            <span class="product-discount-label">-20%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title text-center">
                                <a href="#" class="font-weight-bold">Cheese Chicken Grill </a>
                            </h3>
                            <div class="price text-center mb-3">
                                £ 8.00
                                <span>£ 10.00</span>
                            </div>
                            <a class="all-deals effect" href="">View Product <i class="fa fa-angle-right icon"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </section>
@endif
<!-- Product Listing Ends -->
