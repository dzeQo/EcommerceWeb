@extends('layout')



@section('content')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Overview</a>
    </li>
    <li class="breadcrumb-item active">Orders</li>
  </ol>

  @if(Session('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
    </div>
  @endif
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Orders
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert alert-warning">
                <th class="text-center">#</th>
                <th class="text-center">Ordered By</th>
                <th class="text-center">Product</th>
                <th class="text-center">status</th>
                <th class="text-center">Payment Method</th>
                <th class="text-center">Payment Status</th>
                <th class="text-center">Address</th>
                <th class="text-center">Action</th>
          </thead>
          <tfoot class="alert alert-warning">
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Ordered By</th>
                <th class="text-center">Product</th>
                <th class="text-center">status</th>
                <th class="text-center">Payment Method</th>
                <th class="text-center">Payment Status</th>
                <th class="text-center">Address</th>
                <th class="text-center">Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($Orders as $item)
              <tr>
                <td class="text-center"> {{$item->id}} </td>
                <td class="text-center"> {{ App\Models\User::find($item->user_id)->name }} </td>
                <td class="text-center"> {{ App\Models\Product::find($item->product_id)->name }}</td>
                <td class="text-center"> {{$item->status}} </td>
                <td class="text-center"> {{$item->payement_method}} </td>
                <td class="text-center"> {{$item->payement_status}} </td>
                <td class="text-center " width="150px" > {{$item->address}} </td>
                <td class="text-center">
                  <a class="btn btn-warning btn-sm" href="{{url('admin/ManageOrders/update/'.$item->id)}}"><i class="fas fa-edit"></i></a>
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/ManageP/trash/'.$item->id)}}"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
    </div>
<!-- /.container-fluid -->
@endsection