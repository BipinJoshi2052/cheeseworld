@extends('layouts.frontend.master')
@section('title', $page_data->post_title .' < '. get_site_title())

@section('content')

@section('page-wrapper', 'index-wrapper')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
  <div class="image">
      <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image"
          class="img-fluid">
  </div>
  <div class="overlay position-absolute">
      <div class="title p-4">{{ $page_data->post_title }}</div>
  </div>
</section>
<!-- Breadcrumbs Ends -->
        <!-- About Us -->
        <section id="about-us-wrapper" class="py-5">
          <div class="container">
              <div class="about-us-list">
                  <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 order-xl-1 order-lg-1 order-md-1 order-2 mb-2">
                          <h2>{{ $page_data->post_title }}</h2>
                          <div class="about-us-image-discription h-100 justify-content-center flex-column py-3">
                              {!! htmlspecialchars_decode($page_data->post_content) !!}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- About Us Ends -->
@endsection