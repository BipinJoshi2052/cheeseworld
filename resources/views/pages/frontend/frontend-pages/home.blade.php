@extends('layouts.frontend.master')
{{-- @section('title', trans('frontend.shopist_shop_title') . ' < ' . get_site_title()) --}}

@section('content')

    <!-- Whole Body Wrapper Starts -->
    <section id="index-wrapper">

        @include('includes.frontend.header')

        @include( 'frontend-templates.home.' .$appearance_settings['home']. '.' .$appearance_settings['home'] )

@endsection
