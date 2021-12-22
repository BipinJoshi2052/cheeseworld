<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cheese World</title>
<!-- Bootstrap link Starts -->
<link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css.map') }}">
<!-- Bootstrap link Ends -->
<!-- Font Awesome Link Starts -->
<link rel="stylesheet" href="{{ asset('frontend/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!-- Font Awesome Link Ends -->
<!-- Slick Css -->
<link rel="stylesheet" href="{{ asset('frontend/assets/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/slick/slick-theme.css') }}">
<!-- Slick Css Ends-->
<!-- Custom Links -->
<!-- Font Link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Vidaloka&display=swap" rel="stylesheet">
<!-- Font Link Ends -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">


{{-- <meta charset="UTF-8">
<title>@yield('title')</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

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

<link rel="icon" href="{{ URL::asset('public/favicon.png') }}">
<link rel="stylesheet" href="{{ URL::asset('public/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/font-awesome/css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/plugins/datatable/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/plugins/datatable/responsive.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/sweetalert/sweetalert.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/plugins/select2/select2.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/dropzone/css/dropzone.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/designer/designer.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/designer/scroll/jquery.mCustomScrollbar.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/plugins/ionslider/ion.rangeSlider.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/plugins/ionslider/ion.rangeSlider.skinModern.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/plugins/bootstrap-slider/slider.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/frontend/css/common.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/frontend/css/price-range.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/plugins/iCheck/square/purple.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/modal/css/modal.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/modal/css/modal-extra.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/slick/slick.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/slick/slick-theme.css') }}" />

<link rel="stylesheet" href="{{ URL::asset('public/templates-assets/footer/black-crazy/style.css') }}" />

<!--load header style-->
<link rel="stylesheet" href="{{ URL::asset('public/templates-assets/header/'. $appearance_settings['header'] .'/style.css') }}" />

<!--load home style-->
<link rel="stylesheet" href="{{ URL::asset('public/templates-assets/home/'. $appearance_settings['home'] .'/style.css') }}" />

<!--load blogs style-->
<link rel="stylesheet" href="{{ URL::asset('public/templates-assets/blog/'. $appearance_settings['blogs'] .'/style.css') }}" />

<!--load products style-->
<link rel="stylesheet" href="{{ URL::asset('public/templates-assets/product/'. $appearance_settings['products'] .'/style.css') }}" />

<!--load single products style-->
<link rel="stylesheet" href="{{ URL::asset('public/templates-assets/single-product/'. $appearance_settings['single_product'] .'/style.css') }}" />

<link rel="stylesheet" href="{{ URL::asset('public/js-socials/jssocials.css') }}">

<script type="text/javascript" src="{{ URL::asset('public/jquery/jquery-1.10.2.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/jquery/jquery-ui-1.11.4.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/dropzone/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bootstrap/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/sweetalert/sweetalert.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/select2/select2.full.min.js') }}"></script>

@if(Request::is('product/customize/*'))
<script type="text/javascript" src="{{ URL::asset('public/designer/fabric-1.5.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/designer/customiseControls.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/designer/fabric.curvedText.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/designer/jsPDF.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/designer/designer.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/designer/designerControl.js') }}"></script>
@endif

<script type="text/javascript" src="{{ URL::asset('public/designer/colorpicker/jscolor.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/designer/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/ionslider/ion.rangeSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/bootstrap-slider/bootstrap-slider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/frontend/js/products-variation.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/frontend/js/products-add-to-cart.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/frontend/js/price-range.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/plugins/iCheck/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/modal/js/modal.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/frontend/js/jquery.validate.js') }}"></script>


<script type="text/javascript" src="{{ URL::asset('public/templates-assets/footer/black-crazy/script.js') }}"></script>

<!--load header scripts-->
<script type="text/javascript" src="{{ URL::asset('public/templates-assets/header/'. $appearance_settings['header'] .'/script.js') }}"></script>

<!--load home scripts-->
<script type="text/javascript" src="{{ URL::asset('public/templates-assets/home/'. $appearance_settings['home'] .'/script.js') }}"></script>

<!--load blogs scripts-->
<script type="text/javascript" src="{{ URL::asset('public/templates-assets/blog/'. $appearance_settings['blogs'] .'/script.js') }}"></script>

<!--load products scripts-->
<script type="text/javascript" src="{{ URL::asset('public/templates-assets/product/'. $appearance_settings['products'] .'/script.js') }}"></script>

<!--load single products scripts-->
<script type="text/javascript" src="{{ URL::asset('public/templates-assets/single-product/'. $appearance_settings['single_product'] .'/script.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/templates-assets/single-product/'. $appearance_settings['single_product'] .'/jquery.elevatezoom.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/frontend/js/common.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/frontend/js/social-network.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/common/base64.js') }}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{ URL::asset('public/js-socials/jssocials.min.js') }}"></script> --}}