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
      <div class="title p-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home-page') }}"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
      </div>
  </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- Profile -->
<section id="profile-wrapper" class="py-3">
  <div class="container">
      <div class="row py-xl-5 py-md-3 py-0">
        @include('includes.frontend.user-dashboard')
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