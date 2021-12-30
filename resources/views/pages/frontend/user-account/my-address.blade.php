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
@if(!empty($frontend_account_details) && !empty($frontend_account_details->address_details))
<!-- Profile -->
<section id="profile-wrapper" class="py-3">
  <div class="container">
      <div class="row py-xl-5 py-md-3 py-0">
        @include('includes.frontend.user-dashboard')
          <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
              <div class="profile-side-detail-edit">
                  <div class="dashboard-content d-flex align-items-center h-100">
                      <div class="submit-section">
                          @include('pages-message.notify-msg-success')
                          @include('pages-message.form-submit')
                          @include('pages-message.notify-msg-error')
                          <h4 class="font-weight-bold mb-3">Billing Address</h4>
                          <form action="{{ route('my-address-edit-post') }}" method="POST" enctype="multipart/form-data">
                            @include('includes.csrf-token')
                            <input type="hidden" name="_account_post_type" value="address">
                            <div class="row">
                              <h4 class="font-weight-bold mb-3"></h4>
                              <div class="form-row">
                                  <div class="form-group col-md-6 mb-4">
                                    <label>{{ trans('frontend.account_title') }}</label>
                                      <input type="text" class="form-control" value="{{ old('account_bill_title', ($frontend_account_details->address_details->account_bill_title ? $frontend_account_details->address_details->account_bill_title : '')) }}" placeholder="{{ trans('frontend.title') }}" id="account_bill_title" name="account_bill_title">
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_company_name') }}</label>
                                      <input type="text" class="form-control" value="{{ old('account_bill_company_name', ($frontend_account_details->address_details->account_bill_company_name ? $frontend_account_details->address_details->account_bill_company_name : '')) }}" placeholder="{{ trans('frontend.company_name') }}" id="account_bill_company_name" name="account_bill_company_name">
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_first_name') }} <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" placeholder="{{ trans('frontend.first_name') }}" value="{{ old('account_bill_first_name', ($frontend_account_details->address_details->account_bill_first_name ? $frontend_account_details->address_details->account_bill_first_name : '')) }}" id="account_bill_first_name" name="account_bill_first_name" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_last_name') }} <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" placeholder="{{ trans('frontend.last_name') }}" value="{{ old('account_bill_last_name', ($frontend_account_details->address_details->account_bill_last_name ? $frontend_account_details->address_details->account_bill_last_name : '')) }}" id="account_bill_last_name" name="account_bill_last_name" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_email') }} <span class="text-danger">*</span></label>
                                      <input type="email" class="form-control" placeholder="{{ trans('frontend.email') }}" value="{{ old('account_bill_email_address', ($frontend_account_details->address_details->account_bill_email_address ? $frontend_account_details->address_details->account_bill_email_address : '')) }}" id="account_bill_email_address" name="account_bill_email_address" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_phone_number') }} <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" placeholder="{{ trans('frontend.phone') }}" value="{{ old('account_bill_phone_number', ($frontend_account_details->address_details->account_bill_phone_number ? $frontend_account_details->address_details->account_bill_phone_number : '')) }}" id="account_bill_phone_number" name="account_bill_phone_number" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_select_country') }} <span class="text-danger">*</span></label>
                                      <select class="form-control" id="account_bill_select_country" name="account_bill_select_country" required>
                                        <option value=""> {{ trans('frontend.select_country') }} </option>
                                        @foreach(get_country_list() as $key => $val)
                                          @if(old('account_bill_select_country', ($frontend_account_details->address_details->account_bill_select_country ? $frontend_account_details->address_details->account_bill_select_country : '')) == $key)
                                            <option selected value="{{ $key }}"> {!! $val !!}</option>
                                          @else
                                            <option value="{{ $key }}"> {!! $val !!}</option>
                                          @endif
                                        @endforeach
                                       </select>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                    <label>{{ trans('frontend.account_address_line_1') }} <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ trans('frontend.address_line_1') }}" id="account_bill_adddress_line_1" name="account_bill_adddress_line_1" required>{{ old('account_bill_adddress_line_1', ($frontend_account_details->address_details->account_bill_adddress_line_1 ? $frontend_account_details->address_details->account_bill_adddress_line_1 : '')) }}</textarea>
                                </div>                           
                                  <div class="form-group col-md-6 mb-4">
                                    <label>{{ trans('frontend.account_address_line_2') }}</label>
                                    <textarea class="form-control" placeholder="{{ trans('frontend.address_line_2') }}" id="account_bill_adddress_line_2" name="account_bill_adddress_line_2">{{ old('account_bill_adddress_line_2', ($frontend_account_details->address_details->account_bill_adddress_line_2 ? $frontend_account_details->address_details->account_bill_adddress_line_2 : '')) }}</textarea>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('frontend.account_address_town_city') }} <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="{{ trans('frontend.town_city') }}" value="{{ old('account_bill_town_or_city', ($frontend_account_details->address_details->account_bill_town_or_city ? $frontend_account_details->address_details->account_bill_town_or_city : '')) }}" id="account_bill_town_or_city" name="account_bill_town_or_city" required>
                              </div>                           
                                <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('frontend.account_address_zip_postal_code') }} <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="{{ trans('frontend.zip_postal_code') }}" value="{{ old('account_bill_zip_or_postal_code', ($frontend_account_details->address_details->account_bill_zip_or_postal_code ? $frontend_account_details->address_details->account_bill_zip_or_postal_code : '')) }}" id="account_bill_zip_or_postal_code" name="account_bill_zip_or_postal_code" required>
                              </div>
                            </div> 
                            <div class="d-flex justify-content-between align-items-center w-50 mb-3">      
                          <h4 class="font-weight-bold">Shipping Address</h4> 
                          <div>
                            <label for="checkbox">Same as Billing Address</label>
                            <input type="checkbox" for="checkbox" class="form-input-checkbox" id="inputCheckbox">
                          </div>
                        </div>
                          <div class="form-row">
                            
                            <div class="form-group col-md-6 mb-4">
                              <label>{{ trans('frontend.account_title') }}</label>
                                <input type="text" class="form-control" value="{{ old('account_shipping_title', ($frontend_account_details->address_details->account_shipping_title ? $frontend_account_details->address_details->account_shipping_title : '')) }}" placeholder="{{ trans('frontend.title') }}" id="account_shipping_title" name="account_shipping_title">
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_company_name') }}</label>
                                <input type="text" class="form-control" value="{{ old('account_shipping_company_name', ($frontend_account_details->address_details->account_shipping_company_name ? $frontend_account_details->address_details->account_shipping_company_name : '')) }}" placeholder="{{ trans('frontend.company_name') }}" id="account_shipping_company_name" name="account_shipping_company_name">
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_first_name') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ trans('frontend.first_name') }}" value="{{ old('account_shipping_first_name', ($frontend_account_details->address_details->account_shipping_first_name ? $frontend_account_details->address_details->account_shipping_first_name : '')) }}" id="account_shipping_first_name" name="account_shipping_first_name" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_last_name') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ trans('frontend.last_name') }}" value="{{ old('account_shipping_last_name', ($frontend_account_details->address_details->account_shipping_last_name ? $frontend_account_details->address_details->account_shipping_last_name : '')) }}" id="account_shipping_last_name" name="account_shipping_last_name" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_email') }} <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="{{ trans('frontend.email') }}" value="{{ old('account_shipping_email_address', ($frontend_account_details->address_details->account_shipping_email_address ? $frontend_account_details->address_details->account_shipping_email_address : '')) }}" id="account_shipping_email_address" name="account_shipping_email_address" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_phone_number') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ trans('frontend.phone') }}" value="{{ old('account_shipping_phone_number', ($frontend_account_details->address_details->account_shipping_phone_number ? $frontend_account_details->address_details->account_shipping_phone_number : '')) }}" id="account_shipping_phone_number" name="account_shipping_phone_number" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_select_country') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="account_shipping_select_country" name="account_shipping_select_country" required>
                                  <option value=""> {{ trans('frontend.select_country') }} </option>
                                  @foreach(get_country_list() as $key => $val)
                                    @if(old('account_shipping_select_country', ($frontend_account_details->address_details->account_shipping_select_country ? $frontend_account_details->address_details->account_shipping_select_country : '')) == $key)
                                      <option selected value="{{ $key }}"> {!! $val !!}</option>
                                    @else
                                      <option value="{{ $key }}"> {!! $val !!}</option>
                                    @endif
                                  @endforeach
                                 </select>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                              <label>{{ trans('frontend.account_address_line_1') }} <span class="text-danger">*</span></label>
                              <textarea class="form-control" placeholder="{{ trans('frontend.address_line_1') }}" id="account_shipping_adddress_line_1" name="account_shipping_adddress_line_1" required>{{ old('account_shipping_adddress_line_1', ($frontend_account_details->address_details->account_shipping_adddress_line_1 ? $frontend_account_details->address_details->account_shipping_adddress_line_1 : '')) }}</textarea>
                          </div>                           
                            <div class="form-group col-md-6 mb-4">
                              <label>{{ trans('frontend.account_address_line_2') }}</label>
                              <textarea class="form-control" placeholder="{{ trans('frontend.address_line_2') }}" id="account_shipping_adddress_line_2" name="account_shipping_adddress_line_2">{{ old('account_shipping_adddress_line_2', ($frontend_account_details->address_details->account_shipping_adddress_line_2 ? $frontend_account_details->address_details->account_shipping_adddress_line_2 : '')) }}</textarea>
                          </div>
                          <div class="form-group col-md-6 mb-4">
                            <label>{{ trans('frontend.account_address_town_city') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ trans('frontend.town_city') }}" value="{{ old('account_shipping_town_or_city', ($frontend_account_details->address_details->account_shipping_town_or_city ? $frontend_account_details->address_details->account_shipping_town_or_city : '')) }}" id="account_shipping_town_or_city" name="account_shipping_town_or_city" required>
                        </div>                           
                          <div class="form-group col-md-6 mb-4">
                            <label>{{ trans('frontend.account_address_zip_postal_code') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ trans('frontend.zip_postal_code') }}" value="{{ old('account_shipping_zip_or_postal_code', ($frontend_account_details->address_details->account_shipping_zip_or_postal_code ? $frontend_account_details->address_details->account_shipping_zip_or_postal_code : '')) }}" id="account_shipping_zip_or_postal_code" name="account_shipping_zip_or_postal_code" required>
                        </div>                       
                              <div class="form-group col-12 mx-auto text-center">
                                  <button class="effect px-5" type="submit">Update</button>
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
@else
<section id="profile-wrapper" class="py-3">
  <div class="container">
      <div class="row py-xl-5 py-md-3 py-0">
        @include('includes.frontend.user-dashboard')
          <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
              <div class="profile-side-detail-edit">
                  <div class="dashboard-content d-flex align-items-center h-100">
                      <div class="submit-section">
                          
                          @include('pages-message.notify-msg-success')
                          @include('pages-message.form-submit')
                          @include('pages-message.notify-msg-error')
                          <h4 class="font-weight-bold mb-3">Billing Address</h4>
                          <form action="{{ route('my-address-add-post') }}" method="POST" enctype="multipart/form-data">
                            @include('includes.csrf-token')
                            <input type="hidden" name="_account_post_type" value="address">
                            <div class="row">
                              <h4 class="font-weight-bold mb-3"></h4>
                              <div class="form-row">
                                  <div class="form-group col-md-6 mb-4">
                                    <label>{{ trans('frontend.account_title') }}</label>
                                      <input type="text" class="form-control" value="{{ old('account_bill_title') }}" placeholder="{{ trans('frontend.title') }}" id="account_bill_title" name="account_bill_title">
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_company_name') }}</label>
                                      <input type="text" class="form-control" value="{{ old('account_bill_company_name') }}" placeholder="{{ trans('frontend.company_name') }}" id="account_bill_company_name" name="account_bill_company_name">
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_first_name') }} <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" placeholder="{{ trans('frontend.first_name') }}" value="{{ old('account_bill_first_name') }}" id="account_bill_first_name" name="account_bill_first_name" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_last_name') }} <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" placeholder="{{ trans('frontend.last_name') }}" value="{{ old('account_bill_last_name') }}" id="account_bill_last_name" name="account_bill_last_name" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_email') }} <span class="text-danger">*</span></label>
                                      <input type="email" class="form-control" placeholder="{{ trans('frontend.email') }}" value="{{ old('account_bill_email_address') }}" id="account_bill_email_address" name="account_bill_email_address" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_phone_number') }} <span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" placeholder="{{ trans('frontend.phone') }}" value="{{ old('account_bill_phone_number') }}" id="account_bill_phone_number" name="account_bill_phone_number" required>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                      <label>{{ trans('frontend.account_select_country') }} <span class="text-danger">*</span></label>
                                      <select class="form-control" id="account_bill_select_country" name="account_bill_select_country" required>
                                        <option value=""> {{ trans('frontend.select_country') }} </option>
                                        @foreach(get_country_list() as $key => $val)
                                          @if(old('account_bill_select_country') == $key)
                                            <option selected value="{{ $key }}"> {!! $val !!}</option>
                                          @else
                                            <option value="{{ $key }}"> {!! $val !!}</option>
                                          @endif
                                        @endforeach
                                       </select>
                                  </div>
                                  <div class="form-group col-md-6 mb-4">
                                    <label>{{ trans('frontend.account_address_line_1') }} <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ trans('frontend.address_line_1') }}" id="account_bill_adddress_line_1" name="account_bill_adddress_line_1" required>{{ old('account_bill_adddress_line_1') }}</textarea>
                                </div>                           
                                  <div class="form-group col-md-6 mb-4">
                                    <label>{{ trans('frontend.account_address_line_2') }}</label>
                                    <textarea class="form-control" placeholder="{{ trans('frontend.address_line_2') }}" id="account_bill_adddress_line_2" name="account_bill_adddress_line_2">{{ old('account_bill_adddress_line_2') }}</textarea>
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('frontend.account_address_town_city') }} <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="{{ trans('frontend.town_city') }}" value="{{ old('account_bill_town_or_city') }}" id="account_bill_town_or_city" name="account_bill_town_or_city" required>
                              </div>                           
                                <div class="form-group col-md-6 mb-4">
                                  <label>{{ trans('frontend.account_address_zip_postal_code') }} <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="{{ trans('frontend.zip_postal_code') }}" value="{{ old('account_bill_zip_or_postal_code') }}" id="account_bill_zip_or_postal_code" name="account_bill_zip_or_postal_code" required>
                              </div>
                            </div> 
                            <div class="d-flex justify-content-between align-items-center w-50 mb-3">   
                          <h4 class="font-weight-bold">Shipping Address</h4> 
                          <div>
                            <label for="checkbox">Same as Billing Address</label>
                            <input type="checkbox" for="checkbox" class="form-input-checkbox" id="inputCheckbox">
                          </div>
                        </div>
                          <div class="form-row">
                            
                            <div class="form-group col-md-6 mb-4">
                              <label>{{ trans('frontend.account_title') }}</label>
                                <input type="text" class="form-control" value="{{ old('account_shipping_title') }}" placeholder="{{ trans('frontend.title') }}" id="account_shipping_title" name="account_shipping_title">
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_company_name') }}</label>
                                <input type="text" class="form-control" value="{{ old('account_shipping_company_name') }}" placeholder="{{ trans('frontend.company_name') }}" id="account_shipping_company_name" name="account_shipping_company_name">
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_first_name') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ trans('frontend.first_name') }}" value="{{ old('account_shipping_first_name') }}" id="account_shipping_first_name" name="account_shipping_first_name" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_last_name') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ trans('frontend.last_name') }}" value="{{ old('account_shipping_last_name') }}" id="account_shipping_last_name" name="account_shipping_last_name" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_email') }} <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="{{ trans('frontend.email') }}" value="{{ old('account_shipping_email_address') }}" id="account_shipping_email_address" name="account_shipping_email_address" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_phone_number') }} <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ trans('frontend.phone') }}" value="{{ old('account_shipping_phone_number') }}" id="account_shipping_phone_number" name="account_shipping_phone_number" required>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                                <label>{{ trans('frontend.account_select_country') }} <span class="text-danger">*</span></label>
                                <select class="form-control" id="account_shipping_select_country" name="account_shipping_select_country" required>
                                  <option value=""> {{ trans('frontend.select_country') }} </option>
                                  @foreach(get_country_list() as $key => $val)
                                    @if(old('account_shipping_select_country') == $key)
                                      <option selected value="{{ $key }}"> {!! $val !!}</option>
                                    @else
                                      <option value="{{ $key }}"> {!! $val !!}</option>
                                    @endif
                                  @endforeach
                                 </select>
                            </div>
                            <div class="form-group col-md-6 mb-4">
                              <label>{{ trans('frontend.account_address_line_1') }} <span class="text-danger">*</span></label>
                              <textarea class="form-control" placeholder="{{ trans('frontend.address_line_1') }}" id="account_shipping_adddress_line_1" name="account_shipping_adddress_line_1" required>{{ old('account_shipping_adddress_line_1') }}</textarea>
                          </div>                           
                            <div class="form-group col-md-6 mb-4">
                              <label>{{ trans('frontend.account_address_line_2') }}</label>
                              <textarea class="form-control" placeholder="{{ trans('frontend.address_line_2') }}" id="account_shipping_adddress_line_2" name="account_shipping_adddress_line_2">{{ old('account_shipping_adddress_line_2') }}</textarea>
                          </div>
                          <div class="form-group col-md-6 mb-4">
                            <label>{{ trans('frontend.account_address_town_city') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ trans('frontend.town_city') }}" value="{{ old('account_shipping_town_or_city') }}" id="account_shipping_town_or_city" name="account_shipping_town_or_city" required>
                        </div>                           
                          <div class="form-group col-md-6 mb-4">
                            <label>{{ trans('frontend.account_address_zip_postal_code') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ trans('frontend.zip_postal_code') }}" value="{{ old('account_shipping_zip_or_postal_code') }}" id="account_shipping_zip_or_postal_code" name="account_shipping_zip_or_postal_code" required>
                        </div>                       
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
@endif
<!-- Profile Ends -->
@section('script')
    <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
    <script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>

    <script>
      $(document).ready(function(){
        $("#account_bill_adddress_line_1").on('keyup', () =>{
          alert($(this).html());
        });
        $("#inputCheckbox").on('click', function(){
          if($(this).is(':checked')){
            $("#account_shipping_title").val($("#account_bill_title").val());
            $("#account_shipping_company_name").val($("#account_bill_company_name").val());
            $("#account_shipping_first_name").val($("#account_bill_first_name").val());
            $("#account_shipping_last_name").val($("#account_bill_last_name").val());
            $("#account_shipping_email_address").val($("#account_bill_email_address").val());
            $("#account_shipping_phone_number").val($("#account_bill_phone_number").val());
            $("#account_shipping_select_country").val($("#account_bill_select_country").val());
            $("#account_shipping_adddress_line_1").val($("#account_bill_adddress_line_1").val());
            $("#account_shipping_adddress_line_2").val($("#account_bill_adddress_line_2").val());
            $("#account_shipping_town_or_city").val($("#account_bill_town_or_city").val());
            $("#account_shipping_zip_or_postal_code").val($("#account_bill_zip_or_postal_code").val());
          } else {
            $("#account_shipping_title").val('');
            $("#account_shipping_company_name").val('');
            $("#account_shipping_first_name").val('');
            $("#account_shipping_last_name").val('');
            $("#account_shipping_email_address").val('');
            $("#account_shipping_phone_number").val('');
            $("#account_shipping_select_country").val('');
            $("#account_shipping_adddress_line_1").val('');
            $("#account_shipping_adddress_line_2").val('');
            $("#account_shipping_town_or_city").val('');
            $("#account_shipping_zip_or_postal_code").val('');
          }
        });
      });
    </script>
@endsection