@extends('layouts.admin.master')
@section('title', trans('admin.update_payment_options') .' < '. get_site_title())

@section('content')


@include('pages-message.notify-msg-success')
  
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  @include('includes.csrf-token')
 
  
  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Enable MultiVendor</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-primary pull-right btn-sm" type="submit">{{ trans('admin.update') }}</button>
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
                Enable MultiVendor
              </div>
              <div class="col-sm-7">
                
                <input type="checkbox"  class="shopist-iCheck" name="inputEnableMutliVendor" id="inputEnableMutliVendor" {{ $vendor_type->vendor_status == 1 ? 'checked': '' }}>
                
              </div>
            </div>    
          </div>
        </div>
      </div>  
    </div>
  </div>
</form>


@endsection