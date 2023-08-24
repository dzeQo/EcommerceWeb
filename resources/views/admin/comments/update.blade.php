
@extends('layout')
@section('content')
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>


          <div class="alert alert-warning" role="alert">
           0 => pending
           <br>
           1 => approved
          </div>

          <!-- commentTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> update Comment
              <a href="{{url('admin/ManageOrders')}}" class="float-end btn btn-sm btn-dark">All Orders</a>
            </div>
            <div class="card-body"> 
              <div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{url('admin/comments/'.$comment->id.'/edit')}}">
                  @csrf
                  <table class="table table-bordered">
                      <tr>
                          <th>userName<span class="text-danger">*</span></th>
                            <td><input type="text" value="{{$comment->username }}"  class="form-control" disabled /></td>
                      </tr>
                      <tr>
                          <th>product</th>
                          <td><input type="text" value="{{ App\Models\Product::find($comment->product_id)->name }}"  class="form-control" disabled /></td>
                      </tr>
                      <tr>
                        <th>Comment Content</th>
                        <td><input type="text" value="{{ $comment->comment }}" class="form-control" disabled /></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><input type="text" value="{{ $comment->status }}" name="status" class="form-control"  /></td>
                      </tr>
                      
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="float-end btn btn-primary btn-lg" value="Update" />
                          </td>
                      </tr>
                  </table>
                </form>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated at {{ $comment->updated_at }} </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

      