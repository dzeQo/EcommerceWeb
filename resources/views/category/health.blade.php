
@extends('master')

@section('title' , 'T9edda Leya - Health Products')
    
@section('content')
    <section class="text-center">
        <h4 class="mt-4 ">health products  </h4> 
        <hr>
        <div class="container mb-4">
            <div class="row ">
                @foreach($health as $prd)
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
                    <div class="card shadow">
                        <div class="card">
                        <div class="imgBox">
                            <img src="{{ $prd->gallery }}" alt="{{ $prd->name }}" class="mouse">
                        </div>
                        <div class="contentBox">
                            <h3>{{ $prd->name }}</h3>
                            <h2 class="price">{{ $prd->price}}<small>MAD</small> </h2>
                            <a href="{{url('/detail/'.$prd->id)}}" class="buy">view Now</a>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> <br />
            <!-- pagination -->
        </div>
        <!--Footer-->
    </section>
@endsection