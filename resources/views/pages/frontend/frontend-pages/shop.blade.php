@extends('layouts.frontend.master')
@section('title', trans('frontend.shopist_shop_title') .' < '. get_site_title() )
@section('style')
    <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
@endsection
@section('content')
@section('page-wrapper', 'product-listing-page')
  @include( 'frontend-templates.product.' .$appearance_settings['products']. '.' .$appearance_settings['products'] )
@endsection 
@section('script')
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
@endsection