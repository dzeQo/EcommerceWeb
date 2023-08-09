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
                        <form action="{{url('admin/ManageP/add')}}"  class="box" method="post">
                        @csrf
                            <h1>Add Products</h1>
                            <input type="text" id="inputEmail" class="form-control" name="name" placeholder="the name of product" />
                            <input type="text" class="form-control" name="price" placeholder="enter the price" />
                            <input type="text" class="form-control" name="category" placeholder="enter the category of the product" />
                            <input type="text" class="form-control" name="description" placeholder="enter the details of the product" />
                            <input type="text" class="form-control" name="gallery" placeholder="enter the url of the gallery" />
                            <input type="submit"  class="btn btn-primary btn-block" />
                    </form>
                    </div>
                </div>
            </div>
    </div>  
@endsection