@extends('layouts.admin.master')
@section('title', 'Contacts' .' < '. get_site_title())

@section('content')
@include('pages-message.notify-msg-success')
<div class="row">
 
  <div class="col-6">
    <h5>Contact Lists</h5>
  </div>
  <div class="col-6">
    <div class="pull-right">
      <a href="" class="btn btn-primary pull-right btn-sm">Contacts List</a>
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
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($contacts)>0)
              @foreach($contacts as $row)
                <tr>
                  <td>{{$count++}}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->phone }}</td>
                  <td><textarea style="width: 100%">{{ $row->message }}</textarea></td>
                  <td>
                    <a class="btn btn-danger btn-sm" href="{{ route('admin.delete-contact', $row->id) }}">
                      <i class="fa fa-trash">
                      </i>
                      Delete
                  </a>
                  </td>
                </tr>
              @endforeach
            @else
            <tr><td colspan="3"><i class="fa fa-exclamation-triangle"></i> {!! trans('admin.no_data_found_label') !!}</td></tr>
            @endif
          </tbody>
        </table>
        <br>
        <div class="products-pagination">{!! $contacts->links() !!}</div>
      </div>
    </div>
    
  </div>
</div>
@endsection