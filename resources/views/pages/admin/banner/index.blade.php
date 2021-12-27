@extends('layouts.admin.master')
@section('title', 'Banners' .' < '. get_site_title())

@section('content')
<div class="row">
  <div class="col-6">
    <h5>Banners</h5>
  </div>
  <div class="col-6">
    <div class="pull-right">
      <a href="{{ route('banners.create') }}" class="btn btn-primary pull-right btn-sm">Add Banner</a>
    </div>  
  </div>
</div>
<br>
<div class="row">
  <div class="col-12">
    <div class="box">
      <div class="box-body">
          
        <table class="table table-bordered admin-data-table admin-data-list">
          <thead class="thead-dark">
            <tr>
              <th>S.N</th>
              <th>Image</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($banners)>0)
              @foreach($banners as $row)
                <tr>
                  <td>{{$count++}}</td>
                  <td><img src="{{asset('banner/'.$row->image)}}" alt="{{$row->image}}" class="img-fluid" style="width:150px"/></td>
                  <td>{!! $row['name'] !!}</td>
                  
                    <form action="{{route('banners.destroy',$row->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <td class="project-actions">
                            <a class="btn btn-primary btn-sm" href="{{route('banners.show',$row->id)}}">
                                <i class="fa fa-eye">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('banners.edit',$row->id)}}">
                                <i class="fa fa-pencil">
                                </i>
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm" type="submit">
                                <i class="fa fa-trash">
                                </i>
                                Delete
                            </button>
                        </td>
                    </form>
                  
                </tr>
              @endforeach
            @else
            <tr><td colspan="3"><i class="fa fa-exclamation-triangle"></i> {!! trans('admin.no_data_found_label') !!}</td></tr>
            @endif
          </tbody>
          {{-- <tfoot class="thead-dark">
              <th>{!! trans('admin.post_title') !!}</th>
              <th>{!! trans('admin.status') !!}</th>
              <th>{!! trans('admin.action') !!}</th>
          </tfoot> --}}
        </table>
        <br>
        <div class="products-pagination">{!! $banners->links() !!}</div>
      </div>
    </div>
    
  </div>
</div>
@endsection