@extends('layouts.admin.master')
@section('title', 'Banner Show' .' < '. get_site_title())

@section('content')
@include('pages-message.form-submit')
@include('pages-message.notify-msg-error')
@include('pages-message.notify-msg-success')


  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Show Banner &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-default btn-sm" href="{{ route('banners.index') }}">All Banners</a></h3>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title">Name</h3>
        </div>
        <div class="box-body">
            {{$banner->name}}
        </div>
      </div>
        
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title">{!! trans('admin.description') !!}</h3>
        </div>
        <div class="box-body">
            {!! $banner->description !!}
        </div>
      </div>

      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-picture-o"></i>
          <h3 class="box-title">Image</h3>
        </div>
        <div class="box-body">
          <img src="{{asset('banner/'.$banner->image)}}" alt="{{$banner->image}}" class="img-fluid"/>
        </div>
      </div>
    </div>
  </div>
  
@endsection

