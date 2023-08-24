@extends('layout')



@section('content')

<div class="container-fluid">

  <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('/admin/dashboard')}}">Overview</a>
      </li>
      <li class="breadcrumb-item active">Comments</li>
    </ol>
    @if(session('success'))
      @dd(session('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
    @endif
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Products
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert alert-warning">
                <th class="text-center">#</th>
                <th class="text-center">commented By</th>
                <th class="text-center">commented On</th>
                <th class="text-center">Comment Content</th>
                <th class="text-center">status</th>
                <th class="text-center">Action</th>
          </thead>
          <tfoot class="alert alert-warning">
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">commented By</th>
                <th class="text-center">commented On</th>
                <th class="text-center">Comment Content</th>
                <th class="text-center">status</th>
                <th class="text-center">Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($comments as $item)
              <tr>
                <td class="text-center"> {{$item->id}} </td>
                <td class="text-center"> {{$item->username}} </td>
                <td class="text-center"> {{App\Models\Product::find($item->product_id)->name}}  </td>
                <td class="text-center"> {{$item->comment}} </td>
                <td class="text-center " > {{$item->status}} </td>
                <td class="text-center">
                  <a class="btn btn-info btn-sm" href="{{url('admin/comments/update/'.$item->id)}}"><i class="fas fa-edit"></i></a>
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/comments/trash/'.$item->id)}}"><i class="fas fa-trash"></i></a>
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