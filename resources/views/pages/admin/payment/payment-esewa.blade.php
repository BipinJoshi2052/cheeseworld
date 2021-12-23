@extends('layouts.admin.master')
@section('title', trans('admin.update_esewa_payment') .' < '. get_site_title())

@section('content')
@if(count($payment_method_data) > 0)

@include('pages-message.notify-msg-success')

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  @include('includes.csrf-token')
  <input type="hidden" name="_payment_method_type" value="esewa">
  
  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">{{ trans('admin.esewa') }}</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-primary pull-right btn" type="submit">{{ trans('admin.update') }}</button>
      </div>
    </div>
  </div>
  
 <div class="box box-solid">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          
          <div class="form-group">
            <div class="row">  
              <div class="col-sm-5">
                {{ trans('admin.enable_disable') }}
              </div>
              <div class="col-sm-7">
                @if($payment_method_data['esewa']['enable_option'] == 'yes')
                <input type="checkbox" checked="checked" class="shopist-iCheck" name="inputEnablePaymentEsewaMethod" id="inputEnablePaymentEsewaMethod">  {!! trans('admin.enable_esewa') !!}
                @else
                <input type="checkbox" class="shopist-iCheck" name="inputEnablePaymentEsewaMethod" id="inputEnablePaymentEsewaMethod"> {!! trans('admin.enable_esewa') !!}
                @endif
              </div>
            </div>    
          </div>
            
          <div class="form-group">
            <div class="row">  
              <div class="col-sm-5">
                {{ trans('admin.method_title') }}
              </div>
              <div class="col-sm-7">
                <input type="text" placeholder="{{ trans('admin.title') }}" class="form-control" name="inputEsewaTitle" id="inputEsewaTitle" value="{{ $payment_method_data['esewa']['method_title'] }}">
              </div>
            </div>    
          </div>
          
          <div class="form-group">
            <div class="row">  
              <div class="col-sm-5">
                {{ trans('admin.esewa_merchant_id') }}
              </div>
              <div class="col-sm-7">
                <input type="text" placeholder="{{ trans('admin.esewa_merchant_id') }}" class="form-control" name="inputEsewaMerchantId" id="inputEsewaMerchantId" value="{{ $payment_method_data['esewa']['esewa_merchant_id'] }}">
              </div>
            </div>    
          </div>            
          <div class="form-group">
            <div class="row">  
              <div class="col-sm-5">
                {{ trans('admin.method_description') }}
              </div>
              <div class="col-sm-7">
                  <textarea id="inputEsewaDescription" name="inputEsewaDescription" placeholder="{{ trans('admin.method_description') }}" class="form-control">{{ $payment_method_data['esewa']['method_description'] }}</textarea>
              </div>
            </div>    
          </div>
            
        </div>
      </div>  
    </div>
  </div>
</form>

@endif
@endsection