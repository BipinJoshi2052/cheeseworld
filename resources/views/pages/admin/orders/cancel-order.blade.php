@extends('layouts.admin.master')
@section('title', trans('cancel-order') .' < '. get_site_title())

@section('content')
<div class="row">
  <div class="col-12">
    <h5>{!! 'Cancel Order' !!}</h5>
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
              <th>{{ trans('S.N') }}</th>
              <th>{{ trans('User Name') }}</th>
              <th>{{ trans('Ordered Id') }}</th>
              <th>{{ trans('Note') }}</th>
              <th>{{ trans('admin.action') }}</th>
            </tr>
          </thead>
          <tbody>
            @if ($is_vendor)
            @if(count($cancel_orders) > 0)
              @foreach ($cancel_orders as $item)
                    <tr>
                      <td>{{$count++}}</td>
                      <td>{{ucwords($item->users->name)}}</td>
                      <td>Order #{{ $item->order_id }}</td>
                      <td>{{$item['note']}}</td>
                      <td>
                          <a href="{{route('admin.view_order_details', $item->order_id)}}" class="btn btn-success">View</a>
                      </td>
                    </tr>
                    
                  @endforeach
                 
                @else
                  <tr><td colspan="3"><i class="fa fa-exclamation-triangle"></i> {!! trans('admin.no_data_found_label') !!}</td></tr>  
                @endif
                
            @else
              @if(count($order)>0)
                @foreach($order as $row)
                <tr>
                  <td>{{$count++}}</td>
                  <td>{{ucwords($row->users->name)}}</td>
                  <td>Order #{{ $row['order_id'] }}</td>
                  <td>{{$row['note']}}</td>
                  <td>
                      <a href="{{route('admin.view_order_details', $row['order_id'])}}" class="btn btn-success">View</a>
                  </td>
                </tr>
                @endforeach
              @else
                <tr><td colspan="3"><i class="fa fa-exclamation-triangle"></i> {!! trans('admin.no_data_found_label') !!}</td></tr>  
              @endif
            @endif
          </tbody>
          <tfoot class="thead-dark">
            <tr>
                <th>{{ trans('S.N') }}</th>
                <th>{{ trans('User Name') }}</th>
                <th>{{ trans('Ordered Id') }}</th>
                <th>{{ trans('Note') }}</th>
                <th>{{ trans('admin.action') }}</th>
            </tr>
          </tfoot>
        </table>
        <br>
        @if($is_vendor)
          <div class="products-pagination">{!! $cancel_orders->links() !!}</div>
        @else
          <div class="products-pagination">{!! $order->links() !!}</div>
        @endif
      </div>
    </div>
  </div>
</div>
@include('includes.csrf-token')
@endsection