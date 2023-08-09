
@extends('layout')
@section('content')
  <!--Container Main start-->
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="/admin/dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-6 col-sm-12 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <div class="mr-5">{{\App\Models\Cart::count()}} Carts</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/ManageCart')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-6 col-sm-12 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-store"></i>
          </div>
          <div class="mr-5">{{\App\Models\Product::count()}} Products</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/ManageP')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    
    <div class="col-xl-6 col-sm-12 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{\App\Models\User::count()}} Users</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/users')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <div class="col-xl-6 col-sm-12 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <div class="mr-5">{{\App\Models\Order::count()}} Orders</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/ManageOrders')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
  <!--Container Main end-->
@endsection