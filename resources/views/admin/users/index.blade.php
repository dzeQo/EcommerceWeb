@extends('layout')



@section('content')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Overview</a>
    </li>
    <li class="breadcrumb-item active">Users</li>
  </ol>


  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Users
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="alert alert-warning">
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
          </thead>
          <tfoot class="alert alert-warning">
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($users as $user)
              <tr>
                <td> {{$user->id}} </td>
                <td> {{$user->name}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->password}} </td>
                <td>
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/users/'.$user->id.'/delete')}}">Delete</a>
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