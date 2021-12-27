@extends('layouts.frontend.master')

@section('content')

@section('page-wrapper', 'index-wrapper')

<!-- Login Register  -->
<section id="login-register-wrapper" class="py-3">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-7 mx-auto form-wrapper">
                <form class="px-3 py-4" action="" method="post">
                    <div class="text-center">
                        <h1 class="font-weight-bold my-xl-4 my-md-3 my-4">Login</h1>
                        @include('pages-message.notify-msg-error')
                        @include('pages-message.form-submit')
                        @csrf
                        <div class="form-group position-relative mb-xl-4 mb-md-3 mb-2">
                            <input type="text"
                                class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                name="login_username" id="login_username" placeholder="Username">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </div>
                        <div class="form-group position-relative mb-xl-4 mb-md-3 mb-2">
                            <input type="password"
                                class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                name="login_password" id="login_password" placeholder="Password">
                            <i class="fa fa-key" aria-hidden="true"></i>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-xl-right text-lg-right text-center mt-xl-0 mt-lg-0 mt-2">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <button type="submit" name="login_submit" id="login_submit" class="effect px-5 text-uppercase ">
                            Login
                        </button>
                        <p class="text-center mt-4">
                            Don't have an account?
                            <span>
                                <a href="register-login.html">Register</a>
                            </span>
                        </p>
                        <div class="row mb-4 px-3 justify-content-center align-items-center">
                            <h6 class="mb-xl-0 mb-md-2 mb-2 mr-2">Sign in with</h6>
                            <div class="social-media d-flex justify-content-center h-100">
                                <div class="google text-center mr-3">
                                    <a class="fa fa-google" aria-hidden="true"></a>
                                </div>
                                <div class="facebook text-center mr-3">
                                    <a class="fa fa-facebook" aria-hidden="true"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-1 col-lg-1 col-md-12 col-12 mx-auto my-4 text-center">
                <div class="divider">
                    OR
                </div>
            </div>
            <div class="col-xl-6 col-lg-6  col-md-8 mx-auto form-wrapper">
                <form class="px-xl-5 px-lg-5 px-md-5 px-3 py-4" action="{{ route('user-registration-post') }}"
                    method="post">
                    <div class="text-center">
                        <h1 class="font-weight-bold my-xl-4 my-md-3 my-4">Register</h1>
                        @include('pages-message.notify-msg-error')
                        @include('pages-message.form-submit')
                        @include('pages-message.notify-msg-success')
                        @csrf
                        <div class="form-group position-relative mb-xl-4 mb-md-3 mb-2">
                            <input type="text"
                                class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                value="{{ old('user_reg_display_name') }}" id="user_reg_display_name"
                                name="user_reg_display_name" placeholder="Fullname">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </div>
                        <div class="form-group position-relative mb-xl-4 mb-md-3 mb-2">
                            <input type="text"
                                class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                value="{{ old('user_reg_name') }}" id="user_reg_name" name="user_reg_name"
                                placeholder="Username">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </div>
                        <div class="form-group position-relative mb-xl-4 mb-md-3 mb-2">
                            <input type="email"
                                class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                id="reg_email_id" value="{{ old('reg_email_id') }}" name="reg_email_id"
                                placeholder="Email">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="form-group position-relative mb-xl-4 mb-md-3 mb-2">
                            <input type="text"
                                class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                id="reg_password" name="reg_password" placeholder="Password">
                            <i class="fa fa-key" aria-hidden="true"></i>
                        </div>
                        <div class="form-group position-relative mb-xl-4 mb-md-3 mb-2">
                            <input type="text"
                                class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none bg-transparent"
                                id="reg_password_confirmation" name="reg_password_confirmation"
                                placeholder="Re-type Password">
                            <i class="fa fa-key" aria-hidden="true"></i>
                        </div>
                        <button type="submit" name="user_reg_submit" id="user_reg_submit"
                            class="effect px-5 text-uppercase ">
                            Create an Account
                        </button>
                        <p class="text-center mt-4">
                            Already have an account?
                            <span>
                                <a href="login.html">Login</a>
                            </span>
                        </p>
                        <div class="row mb-4 px-3 justify-content-center align-items-center">
                            <h6 class="mb-xl-0 mb-md-2 mb-2 mr-2">Sign in with</h6>
                            <div class="social-media d-flex justify-content-center h-100">
                                <div class="google text-center mr-3">
                                    <a class="fa fa-google" aria-hidden="true"></a>
                                </div>
                                <div class="facebook text-center mr-3">
                                    <a class="fa fa-facebook" aria-hidden="true"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Login Register Ends -->

@endsection
