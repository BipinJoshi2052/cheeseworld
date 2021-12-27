@extends('layouts.frontend.master')
@section('title', $single_product_details['_product_seo_title'] .' < '. get_site_title())
@section('style')
    <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
@endsection
@section('content')
@section('page-wrapper', 'product-listing-page')
  @include('frontend-templates.single-product.' .$appearance_settings['single_product']. '.' .$appearance_settings['single_product'])
@endsection

@section('script')
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
@endsection