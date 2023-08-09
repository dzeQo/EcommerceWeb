@extends('layout')


{{-- @php
    use Session;
@endphp --}}
@section('content')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Overview</a>
    </li>
    <li class="breadcrumb-item active">Carts</li>
  </ol>

  @if(Session::has('done'))
    <div class="alert alert-success" role="alert">
      {{Session::get('done')}}
    </div>
  @endif
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Carts
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert alert-warning">
                <th class="text-center">#</th>
                <th class="text-center">Added by</th>
                <th class="text-center">Product</th>
                <th class="text-center">Price</th>
                <th class="text-center">Action</th>
          </thead>
          <tfoot class="alert alert-warning">
            <tr>
            <th class="text-center">#</th>
                <th class="text-center">Added by</th>
                <th class="text-center">Product</th>
                <th class="text-center">Price</th>
                <th class="text-center">Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($carts as $item)
              <tr>
                <td class="text-center"> {{$item->id}} </td>
                <td class="text-center"> {{ App\Models\User::find($item->user_id)->name }} </td>
                <td class="text-center"> {{ App\Models\Product::find($item->product_id)->name }} </td>
                <td class="text-center"> {{ App\Models\Product::find($item->product_id)->price }} MAD</td>
                <td class="text-center">
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/ManageCart/'.$item->id.'/delete')}}"><i class="fas fa-trash"></i></a>
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