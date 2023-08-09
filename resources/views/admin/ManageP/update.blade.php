@extends('layout')

@section('content')
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Products</li>
            <li class="breadcrumb-item active">Add Products</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Add Product
              <a href="{{url('admin/ManageP')}}" class="float-end btn btn-sm btn-dark">All Products</a>
            </div>          
            <div class="row">
                <div class="col-md-6">
                    <div class="card"> 
                        <form action="{{url('admin/ManageP/'.$data->id.'/edit')}}"  class="box" method="post">
                        @csrf
                            <h1>Add Products</h1>
                            <input type="text" id="inputEmail" class="form-control" name="name" value="{{$data->name}}" />
                            <input type="text" class="form-control" name="price" value="{{$data->price}}" />
                            <input type="text" class="form-control" name="category" value="{{$data->category}}" />
                            <input type="text" class="form-control" name="description" value="{{$data->description}}" />
                            <input type="text" class="form-control" name="gallery" value="{{$data->gallery}}" />
                            <input type="submit"  class="btn btn-primary btn-block" />
                    </form>
                    </div>
                </div>
            </div>
    </div>  
@endsection