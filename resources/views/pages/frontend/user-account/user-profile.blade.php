@section('style')
  <link rel="stylesheet" href="https://k1ngzed.com/dist/swiper/swiper.min.css" />
  <link rel="stylesheet" href="https://k1ngzed.com/dist/EasyZoom/easyzoom.css" />
@endsection
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
  <div class="image">
      <img src="{{ URL::asset('public/frontend/assets/images/product-images/3.jpg') }}" alt="breadcrumb-image" class="img-fluid">
  </div>
  <div class="overlay position-absolute">
      <div class="title p-4">Product Listing</div>
  </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- Profile -->
<section id="profile-wrapper" class="py-3">
  <div class="container">
      <div class="row py-xl-5 py-md-3 py-0">
          <div class="col-xl-3 col-lg-3 col-md-12 col-12 mb-xl-0 mb-lg-0 mb-3">
              <div class="dashboard-list py-lg-5 px-lg-3 d-lg-block d-none">
                  <div class="d-user-avater text-center mb-4">
                      <img src="{{ URL::asset('public/frontend/assets/images/product-images/1.jpg') }}" class="img-fluid avater" alt="profile-image">
                      <h5>Adam Harshvardhan</h5>
                      <a href=""> <span class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></span> Upload Image</a>
                  </div>
                  <ul class="sidebar">
                      <li class="active mb-3 p-2">
                          <a href="dashboard-profile.html"><span class="mr-2"><i class="fa fa-user" aria-hidden="true"></i></span>Profile</a>
                      </li>
                      <li class="mb-3 p-2">
                          <a href="dashboard-order-status.html"><span class="mr-2"><i class="fa fa-sort" aria-hidden="true"></i></span>Order Status</a>
                      </li>
                      <li class="mb-3 p-2">
                          <a href="dashboard-cart.html"><span class="mr-2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>My Cart</a>
                      </li>
                      <li class="mb-3 p-2">
                          <a href="dashboard-wishlist.html"><span class="mr-2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>Wishlist</a>
                      </li>
                      <li class="mb-3 p-2 ">
                          <a href="dashboard-change-password.html"><span class="mr-2"><i class="fa fa-lock" aria-hidden="true"></i></span>Change Password</a>
                      </li>
                      <li class="mb-3 p-2 ">
                          <a href="index.html"><span class="mr-2"><i class="fa fa-sign-out" aria-hidden="true"></i></span>Logout</a>
                      </li>
                  </ul>
              </div>
              <!-- Mobile Profile Nav -->
              <ul class="mobile-profile-nav d-lg-none d-flex flex justify-content-around align-items-center h-100 " data-toggle="modal" data-target="#profilemobilenav">
                  <li>
                      <span class="active"><i class="fa fa-user " aria-hidden="true "></i></span>
                  </li>
                  <li>
                      <span><i class="fa fa-sort " aria-hidden="true "></i></span>
                  </li>
                  <li>
                      <span><i class="fa fa-shopping-bag " aria-hidden="true "></i></span>
                  </li>
                  <li>
                      <span><i class="fa fa-lock " aria-hidden="true "></i></span>
                  </li>
                  <li>
                      <span><i class="fa fa-sign-out " aria-hidden="true "></i></span>
                  </li>
              </ul>
              </button>
              <!-- Mobile Profile Nav Ends-->
          </div>
          <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
              <div class="profile-side-detail-edit">
                  <div class="dashboard-content d-flex align-items-center h-100">
                      <div class="submit-section">
                          <h4 class="font-weight-bold mb-3">Account</h4>
                          @include('pages-message.notify-msg-success')
                          @include('pages-message.form-submit')
                          @include('pages-message.notify-msg-error')
                          <form action="" method="POST" enctype="multipart/form-data">
                            @include('includes.csrf-token')
                          <div class="form-row">
                              <div class="form-group col-md-6 mb-4"><label>{{ ucfirst( trans('admin.display_name') ) }}</label>
                                  <input type="text" class="form-control" value="{{ $user_details['user_display_name'] }}" placeholder="{{ trans('admin.display_name') }}" id="display_name" name="display_name">
                              </div>
                              <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('admin.user_name') }}</label>
                                  <input type="text" class="form-control" value="{{ $user_details['user_name'] }}" placeholder="{{ trans('admin.user_name') }}" id="user_name" name="user_name">
                              </div>
                              <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('admin.email') }}</label>
                                  <input type="text" class="form-control" placeholder="{{ trans('admin.email') }}" value="{{ $user_details['user_email'] }}" id="email_id" name="email_id">
                              </div>
                              <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('admin.new_password') }}</label>
                                  <input type="password" class="form-control" placeholder="{{ trans('admin.new_password') }}" value="" id="password" name="password">
                              </div>
                              {{-- <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('admin.profile_picture') }}</label>
                                  <input type="text" class="form-control" value="1998-01-21">
                              </div> --}}
                              
                              <div class="form-group col-12 mx-auto text-center">
                                  <button class="effect px-5" type="submit">Save</button>
                              </div>

                          </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</section>
<!-- Profile Ends -->
@section('script')
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
@endsection