@extends('layouts.frontend.master')
@section('title', trans('frontend.shopist_cart_title') .' < '. get_site_title() )

@section('content')

@section('page-wrapper', 'cart-page-wrapper')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{ asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image"
            class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home-page') }}"><i class="fa fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">My Cart</li>
                </ol>
              </nav>
        </div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- Cart -->
<section id="cart-wrapper" class="py-3">
    <div class="container">
        <div class="row py-xl-5 py-md-3 py-0">

            @include('includes.frontend.user-dashboard')

            @include('pages.ajax-pages.cart-html')
            
        </div>
    </div>
</section>
<!-- Cart Ends -->

@endsection
