@extends('master')
@section('title' , 'EcomWeb -  '.$product->name )

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="{{$product['name']}}">
            </div>
            <div class="col-sm-6">
                <br>
                <a href="/" class="btn btn-info">Home Page</a>
                <br><br />
                <h2>{{ $product['name'] }}</h2>
                <h3> Price : {{ $product['price'] }} MAD</h3>
                <h4> Details : {{ $product['description'] }}</h4>
                <h4> Category : {{$product['category']}}</h4>
                <br><br />
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-success">Add To Cart</button>
                </form>
                <br><br />
                <button class="btn btn-danger">Buy Now </button><br><br />
            </div>
        </div>
    </div>
@endsection