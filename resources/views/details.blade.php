@extends('master')
@section('title' , 'EcomWeb - '.$product->name )

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="{{$product['name']}}">
        </div>
        <div class="col-sm-6">
            <br><br><br />
            <h2>{{ $product['name'] }}</h2>
            <h3> Price: {{ $product['price'] }} MAD</h3>
            <h4> Details: {{ $product['description'] }}</h4>
            <h4> Category: {{$product['category']}}</h4>
            <br><br />
            <form action="{{url('add_to_cart')}}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-info float-end mx-1">Add To Cart</button>
            </form>
            <a href="{{ url('/')}}"><button class="btn btn-outline-info float-end">Home Page </button></a> <br><br />
        </div>
    </div>
</div>

@if (Session::has('user'))
<div class="container">
    <div class="card-shadow mt-2 mb-4">
        <h5 class="card-header text-center">Add a comment</h5>
        <div class="card-body text-center">
            <form method="POST" action="{{url('/save-comment/'.$product->id)}}">
                @csrf
                <textarea class="form-control mt-2" name="comment" placeholder="Enter your comment" rows="3"></textarea>
                <input type="submit" value="Add" class="btn btn-outline-dark mt-2 my-2">
            </form>
        </div>
    </div>
@endif

<div class="cardd my-4">
    <h5 class="card-header">Comments <span class="badge badge-dark">{{count($product->comments)}}</span></h5>
    <div class="card-body">
        @if($product->comments)
            @foreach($product->comments as $comment)
                <blockquote class="blockquote">
                    <p class="mb-0">{{$comment->comment}}</p><br/>
                        <footer class="float-end blockquote-footer"><i class="fas fa-user" style="color: #0b0909;"></i> By {{$comment->username}}</footer>
                        <br>
                        <footer class="float-end blockquote-footer"><i class="fas fa-clock" style="color: #0b0909;"></i> At {{$comment->created_at->format('l, H:i')}}</footer>
                </blockquote>
                <hr/>
            @endforeach
        @endif
    </div>
</div>
</div>
@endsection
