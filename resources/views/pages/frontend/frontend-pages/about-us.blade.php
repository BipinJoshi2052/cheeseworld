@extends('layouts.frontend.master')

@section('content')

@section('page-wrapper', 'index-wrapper')

<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{ asset('public/frontend/assets/images/product-images/1.jpg') }}" alt="breadcrumb-image"
            class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">About Us</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- About Us -->
<section id="about-us-wrapper" class="py-5">
    <div class="container">
        <div class="about-us-list">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 order-xl-1 order-lg-1 order-md-1 order-2 mb-2">
                    <div
                        class="about-us-image-discription d-flex h-100 justify-content-center align-items-end flex-column py-3">
                        <h2>Our Story</h2>
                        <p class="text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                            commodi corporis omnis aliquid minima sapiente exercitationem nemo ad amet, quae voluptatem
                            fugit eaque quo. Eaque aperiam at blanditiis! Doloribus, sunt.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 order-xl-2 order-lg-2 order-md-2 order-1 mb-2">
                    <div class="about-us-image">
                        <img src="{{ asset('public/frontend/assets/images/product-images/10.jpg') }} "
                            class="img-fluid ">
                    </div>
                </div>
                <section id="video-wrapper" class="about-us-video-wrapper my-4 order-xl-3 order-lg-3 col-12 mb-4">
                    <div class="video-info position-relative">
                        <img src="{{ asset('public/frontend/assets/images/product-images/5.jpg') }}"
                            class="img-fluid" alt="video-image">
                        <a id="play-video" class="video-play-button" href="#">
                            <span></span>
                        </a>
                        <div id="video-overlay" class="video-overlay">
                            <!-- <a class="video-overlay-close">×</a> -->
                        </div>
                    </div>
                </section>
                <div class="col-xl-6 col-lg-6 col-md-6 order-xl-4 order-lg-4 order-md-4 order-4 mb-2">
                    <div class="about-us-image ">
                        <img src="{{ asset('public/frontend/assets/images/product-images/7.jpg') }} "
                            class="img-fluid ">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 order-xl-5 order-lg-5 order-md-5 order-5 mb-2">
                    <div
                        class="about-us-image-discription d-flex h-100 justify-content-center align-items-start flex-column py-3">
                        <h2>Our Goals</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora commodi corporis omnis
                            aliquid minima sapiente exercitationem nemo ad amet, quae voluptatem fugit eaque quo. Eaque
                            aperiam at blanditiis! Doloribus, sunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Ends -->

@endsection
