@extends('layouts.frontend.master')

@section('content')

    <!-- Whole Body Wrapper Starts -->
    <section id="contact-page-wrapper">
        
        @include('includes.frontend.header')

        <!-- Breadcrumbs -->
        <section id="breadcrumb-wrapper" class="position-relative">
            <div class="image">
                <img src="{{ asset('frontend/assets/images/product-images/1.jpg') }}" alt="breadcrumb-image" class="img-fluid">
            </div>
            <div class="overlay position-absolute">
                <div class="title p-4">Contact Us</div>
            </div>
        </section>
        <!-- Breadcrumbs Ends -->
        <!-- About Us -->
        <section id="contact-us-wrapper" class="padding">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-12 p-0">
                        <div class="heading d-flex justify-content-center align-items-center text-center mb-3 flex-wrap">
                            <div class="head">
                                <h2>Connect with Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31625951334!2d85.2911132275138!3d27.70895594440546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1639639797992!5m2!1sen!2snp"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-8 col-12 p-0">
                        <form class="contact-form p-xl-5 p-lg-4 p-md-5 p-3">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control " rows="4" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="effect px-5">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Ends -->

@endsection