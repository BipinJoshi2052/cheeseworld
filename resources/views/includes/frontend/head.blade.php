<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

@if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['meta_keywords']))
<meta name="keywords" content="{{ $single_product_details['meta_keywords'] }}">

@elseif( Request::is('blog/*') && !empty($blog_details_by_slug['meta_keywords']))
<meta name="keywords" content="{{ $blog_details_by_slug['meta_keywords'] }}">

@elseif((Request::is('store/details/home/*') || Request::is('store/details/products/*') || Request::is('store/details/reviews/*') || Request::is('store/details/cat/products/*')) && !empty($store_seo_meta_keywords))
<meta name="keywords" content="{{ $store_seo_meta_keywords }}">

@elseif(!empty($seo_data) && $seo_data['meta_tag']['meta_keywords'])
<meta name="keywords" content="{{ $seo_data['meta_tag']['meta_keywords']}}">
@endif

@if(!empty($seo_data) && $seo_data['meta_tag']['meta_description'])
<meta name="description" content="{{ $seo_data['meta_tag']['meta_description'] }}">
@endif

@if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['_product_seo_description']))
<meta name="description" content="{{ $single_product_details['_product_seo_description'] }}">
@endif

@if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['post_slug']))
<link rel="canonical" href="{{ route('details-page', $single_product_details['post_slug']) }}">
@endif

@if(Request::is('blog/*') && !empty($blog_details_by_slug['blog_seo_description']))
<meta name="description" content="{{ $blog_details_by_slug['blog_seo_description'] }}">
@endif

@if(Request::is('blog/*') && !empty($blog_details_by_slug['blog_seo_url']))
<link rel="canonical" href="{{ route('blog-single-page', $blog_details_by_slug['blog_seo_url']) }}">
@endif

@if((Request::is('store/details/home/*') || Request::is('store/details/products/*') || Request::is('store/details/reviews/*') || Request::is('store/details/cat/products/*')) && !empty($store_seo_meta_description))
<meta name="description" content="{{ $store_seo_meta_description }}">
@endif
<title>Cheese World</title>
<!-- Bootstrap link Starts -->
<link rel="stylesheet" href="{{ asset('public/frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css.map') }}">
<!-- Bootstrap link Ends -->
<!-- Font Awesome Link Starts -->
<link rel="stylesheet" href="{{ asset('public/frontend/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!-- Font Awesome Link Ends -->
<!-- Slick Css -->
<link rel="stylesheet" href="{{ asset('public/frontend/assets/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/assets/slick/slick-theme.css') }}">
<!-- Slick Css Ends-->
<!-- Custom Links -->
<!-- Font Link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Vidaloka&display=swap" rel="stylesheet">
<!-- Font Link Ends -->
<link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/assets/css/responsive.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/frontend/css/toastr.min.css') }}">

<style>
    .toast-top-container {
        position: absolute;
        top: 65px;
        width: 280px;
        right: 40px;
        height: auto;
    }

    .bg-hippie-green{
        background-color: #468847 !important;
    }

    .bg-purple{
        background-color: purple !important;
    }

    .bg-navy{
        background-color: navy !important;
    }

    .bg-chestnut{
        background-color: #b94a48 !important;
    }

    .bg-teal {
        background-color: teal !important;
    }

</style>

<style>
    /*=================================================== TESTIMONIAL START  */
section#testimonial {
    padding-bottom: 80px;
}

section#testimonial span.position-relative::after {
    content: "";
    height: 4px;
    width: 25px;
    background-color: #aeaeae;
    position: absolute;
    left: -38px;
    top: 22px;
}
section#testimonial p {
	color: var(--black_light);
}

section#testimonial .slick-w p {
	font-size: 1rem;
}

section#testimonial .testimonial-image-content .image-block img {
	max-width: 150px;
	min-width: 150px;
	border-radius: 50%;
	min-height: 150px;
	max-height: 150px;
}


/*=================================================== ORDER RECEIVED START  */
.invoice-title h2, .invoice-title h3 {
  display: inline-block;
}

section#order_received .table > tbody > tr > .no-line {
  border-top: none;
}

section#order_received .table > thead > tr > .no-line {
  border-bottom: none;
}

section#order_received .table > tbody > tr > .thick-line {
  border-top: 2px solid;
}
section#order_received .panel.panel-default.mt-2 {
  border: 1px solid #dee2e6;
}
section#order_received .panel-heading {
  padding: 10px;
  background: #80808036;
}
section#order_received {
  background: #83838314;
}
section#order_received .row_wrapper {
  background: white;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  padding: 28px;
}
section#order_received address.side_block strong.mb-2.d-inline-block {
  font-size: 15px !important;
  display: block;
  font-weight:500 !important;
}
/*=================================================== ORDER RECEIVED END  */
/*=================================================== TESTIMONIAL END  */
</style>

@yield('style')