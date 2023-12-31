
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


          <!-- orderToEditTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> update Order
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

                <form method="post" action="{{url('admin/ManageOrders/'.$orderToEdit->id.'/edit')}}">
                  @csrf
                  <table class="table table-bordered">
                      <tr>
                          <th>userName<span class="text-danger">*</span></th>
                            <td><input type="text" value="{{ App\Models\User::find($orderToEdit->user_id)->name }}"  class="form-control" disabled /></td>
                      </tr>
                      <tr>
                          <th>product</th>
                          <td><input type="text" value="{{ App\Models\Product::find($orderToEdit->product_id)->name }}"  class="form-control" disabled /></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><input type="text" value="{{ $orderToEdit->status }}" name="status" class="form-control"  /></td>
                      </tr>
                      <tr>
                        <th>Payment Method</th>
                        <td><input type="text" value="{{ $orderToEdit->payement_method }}" class="form-control" disabled /></td>
                      </tr>
                      <tr>
                        <th>Payment status</th>
                        <td><input type="text" value="{{ $orderToEdit->payement_status }}" name="pstatus" class="form-control"  /></td>
                      </tr>
                      <tr>
                          <th>Address</th>
                          <td>
                            <textarea class="form-control"   disabled>{{ $orderToEdit->address }}</textarea>
                          </td>
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
            <div class="card-footer small text-muted">Updated at {{ $orderToEdit->updated_at }} </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

      