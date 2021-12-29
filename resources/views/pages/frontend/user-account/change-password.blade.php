@extends('layouts.frontend.master')

@section('content')

@section('page-wrapper', 'index-wrapper')
        
        <!-- Breadcrumbs -->
        <section id="breadcrumb-wrapper" class="position-relative">
            <div class="image">
                <img src="{{ asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image" class="img-fluid">
            </div>
            <div class="overlay position-absolute">
                <div class="title p-4">Product Listing</div>
            </div>
        </section>
        <!-- Breadcrumbs Ends -->
        <!-- Change Password -->
        <section id="change-password-wrapper" class="py-3">
            <div class="container">
                <div class="row py-xl-5 py-md-3 py-0">
                    @include('includes.frontend.user-dashboard')
                    <div class="col-xl-7 col-lg-7 col-md-12 col-12 ">
                        <div class="change-password dashboard-content">
                            <form method="post" action="">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="oldPassword">Old Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="oldPassword" name="oldPassword">
                                    @error('oldPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="newPassword">New Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="newPassword" name="newPassword">
                                    @error('newPassword')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="confirmPassword">Confirm Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" id="confirmPassword" name="confirmPassword">
                                    @error('confirmPassword')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <button type="submit" class="effect">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Change Password Ends -->

@endsection