@extends('layouts.admin.master')
@section('title', trans('admin.edit_banner') .' < '. get_site_title())

@section('content')
@include('pages-message.form-submit')
@include('pages-message.notify-msg-error')
@include('pages-message.notify-msg-success')

<form class="form-horizontal" method="post" action="{{route('banners.update',$banner->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Banner &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-default btn-sm" href="{{ route('banners.index') }}">All Banners</a></h3>
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
          <input type="text" class="form-control" name="name" value="{{ old('name',$banner->name) }}">
        </div>
      </div>
      
      
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title">Type</h3>
        </div>
        <div class="box-body">
          <select name="type" class="form-control">
              <option {{($banner->type == 'home-banner')?'selected':''}} value="home-banner">Home Banner</option>
              <option {{($banner->type == 'parralex-home-banner')?'selected':''}} value="parralex-home-banner">Parallex Home Banner</option>
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
          <textarea id="page_description_editor" name="description" class="dynamic-editor">{{ old('description',$banner->description) }}</textarea>
        </div>
      </div>

      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-picture-o"></i>
          <h3 class="box-title">Image</h3>
        </div>
        <div class="box-body">
          <input type="file" class="form-control" name="image" id="image"><br>
          <img src="{{asset('banner/'.$banner->image)}}" alt="{{$banner->image}}" id="preview-image-before-upload" class="img-fluid"/>
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