@section('products-content')
<div class="row right-side-wrapper">
  @if($all_products_details['products']->count() > 0)
    @foreach($all_products_details['products'] as $products)
      <?php 
      $reviews          = get_comments_rating_details($products->id, 'product');
      $reviews_settings = get_reviews_settings_data($products->id);
      ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-4 post">
       <div class="product-grid-item">
           <div class="product-grid-image">
               <?php
                  if(!empty($products->image_url)){
                    $product_image_url = get_image_url($products->image_url);
                    $_alt = basename(get_image_url($products->image_url));
                  } else {
                    $product_image_url = default_placeholder_img_src();
                    $_alt = "";
                  }
               ?>
              
               <a href="#">
                   <img class="pic-1" src="{{ $product_image_url }}" alt="{{ $_alt }}">
               </a>
               <ul class="social single-product-add-to-cart">
                   <li>
                       <a href="" data-id="{{ $products->id }}" class="fa fa-shopping-bag product-wishlist"></a>
                   </li>
                   <li>
                       <a href="" data-id="{{ $products->id }}" class="fa fa-shopping-cart add-to-cart-bg"></a>
                   </li>
               </ul>
               <span class="product-discount-label">-20%</span>
           </div>
           <div class="product-content">
               <h3 class="title text-center">
                   <a href="{{ route('details-page', $products->slug) }}" class="font-weight-bold">{!! $products->title !!}</a>
               </h3>
               <div class="price text-center mb-3">
                 <?php 
                  if($products->type == 'simple_product'){
                    $_product_price = price_html( get_product_price_html_by_filter(get_role_based_price_by_product_id($products->id, $products->price)), get_frontend_selected_currency());
                  }
                 ?>
                   {!! $_product_price !!}
                   {{-- <span>£ 10.00</span> --}}
               </div>
               <a class="all-deals effect" href="{{ route('details-page', $products->slug) }}">View Product <i
                       class="fa fa-angle-right icon"></i>
               </a>
           </div>
       </div>
      </div>
    @endforeach
  @endif                         
</div>
<button type="button" class="effect mx-auto mt-4">View More</button>
@endsection