@extends('layouts.admin.master')
@section('title', 'Social Medai Login' . ' < ' . get_site_title())
@section('content')
 @include('pages-message.notify-msg-success')
 <form class="form-horizontal" method="post" action="">
        @include('includes.csrf-token')
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Social Media Login Integration</h3>
                <div class="pull-right">
                    <button class="btn btn-primary btn-sm" type="submit">{!! trans('admin.save') !!}</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="fb_app_id">Facebook Client ID:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="hidden" name="types[]" value="FACEBOOK_CLIENT_ID">
                            <input type="text" class="form-control" name="FACEBOOK_CLIENT_ID" value="{{ old('FACEBOOK_CLIENT_ID', Config::get('services.facebook.client_id')) }}"
                                placeholder="Enter Facebook Client Id">
                            @error('FACEBOOK_CLIENT_ID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="fb_app_id">Facebook Secret ID:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="hidden" name="types[]" value="FACEBOOK_SECRET_KEY">
                            <input type="text" class="form-control" name="FACEBOOK_SECRET_KEY" value="{{ old('FACEBOOK_SECRET_KEY', Config::get('services.facebook.client_secret')) }}"
                                placeholder="Enter Facebook Secret Key">
                            @error('FACEBOOK_SECRET_KEY')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="fb_app_id">Google Client ID:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="hidden" name="types[]" value="GOOGLE_CLIENT_ID">
                            <input type="text" class="form-control" name="GOOGLE_CLIENT_ID" value="{{ old('GOOGLE_CLIENT_ID', Config::get('services.google.client_id')) }}"
                                placeholder="Enter Google Client Id">
                            @error('GOOGLE_CLIENT_ID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="fb_app_id">Google Secret Key:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="hidden" name="types[]" value="GOOGLE_SECRET_KEY">
                            <input type="text" class="form-control" name="GOOGLE_SECRET_KEY" value="{{ old('GOOGLE_SECRET_KEY', Config::get('services.google.client_secret')) }}"
                                placeholder="Enter Google Secret Key">
                            @error('GOOGLE_SECRET_KEY')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        
    @endsection
