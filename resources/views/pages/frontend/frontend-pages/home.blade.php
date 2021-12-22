@extends('layouts.frontend.master')
{{-- @section('title', trans('frontend.shopist_home_title') . ' < ' . get_site_title()) --}}

@section('content')
    {{-- @dd(Auth::check()) --}}
    {{-- @dd(Session::get("shopist_frontend_user_id")) --}}
    {{-- {{ dd(get_defined_vars()) }} --}}

    <!-- Banner Section Starts -->
    <section id="banner-wrapper" class="position-relative py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-2 order-lg-1 order-md-1 order-2">
                    <div class="content d-flex align-items-center h-100">
                        <div class="sub-heading">
                            <div class="slogancustom">
                                <p class="m-0 font-weight-bold">
                                    <span class="eercast mr-2"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    Delicious Choice of Cheese Variant at
                                </p>
                            </div>
                            <div class="head">
                                <h1>Chesse World</h1>
                            </div>
                            <div class="discription mb-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum iure modi, quod nemo
                                    veniam veritatis exercitationem perferendis iusto quidem porro facilis quia! Distinctio
                                    laboriosam reprehenderit laudantium, voluptate
                                    vero neque eercast.</p>
                            </div>
                            <div class="buttons">
                                <a href="" class="effect anchor-btn">View Products</a>
                                <a href="" class="effect anchor-btn2">Try our other recipes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-2 order-lg-2 order-md-2 order-1">
                    <div class="image">
                        <img src="frontend/assets/images/banner/3.png" alt="banner-image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section Ends -->

    @include( 'frontend-templates.home.' .$appearance_settings['home']. '.' .$appearance_settings['home'] )
@endsection
