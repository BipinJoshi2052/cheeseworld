@extends('layouts.admin.master')
@section('title', 'Add Banner < '. get_site_title())

@section('content')
@include('pages-message.form-submit')
@include('pages-message.notify-msg-error')
@include('pages-message.notify-msg-success')

<form class="form-horizontal" method="post" action="{{route('banners.store')}}" enctype="multipart/form-data">
    @include('includes.csrf-token')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Add New Banner &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-default btn-sm" href="{{ route('banners.index') }}">All Banners</a></h3>
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
          <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
      </div>

      
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title">Type</h3>
        </div>
        <div class="box-body">
          <select required name="type" class="form-control">
              <option selected disabled>Choose Type</option>
              <option value="home-banner">Home Banner</option>
              <option value="parralex-home-banner">Parallex Home Banner</option>
          </select>
          {{-- <input type="text" class="form-control" name="name" value="{{ old('name') }}"> --}}
        </div>
      </div>
        
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title">{!! trans('admin.description') !!}</h3>
        </div>
        <div class="box-body">
          <textarea id="page_description_editor" name="description" class="dynamic-editor">{{ old('description') }}</textarea>
        </div>
      </div>

      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-picture-o"></i>
          <h3 class="box-title">Image</h3>
        </div>
        <div class="box-body">
          <input type="file" class="form-control" name="image" id="image"><br>
          <img id="preview-image-before-upload"  style="max-height:250px;">
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-primary btn-sm" type="submit">Save</button>

</form>
  
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
            
    $(document).ready(function (e) {
    
    
    $('#image').change(function(){
                
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#preview-image-before-upload').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
    
</script>