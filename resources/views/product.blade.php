@extends('master')
@section('title' ,'EcomWeb - Products' )
@section('content')
<br><br/>
    <div class="container custom-product">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($recents as $item)
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <a href="/detail/{{$item['id']}}">
                            <img src="{{$item['gallery']}}" class="slider-img">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$item['name']}}</h5>
                                <p>{{$item['description']}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <section class="text-center">
            <h4 class="mt-4 ">Tranding Products </h4> 
            <hr>
            <div class="container mb-4">
                <div class="row ">
                    @if(count($products)>0)
                        @foreach($products as $post)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <a href="/detail/{{$post['id']}}">
                                    <img  height="250px"  class="card-img-top" src="{{ $post->gallery }}" alt="{{ $post->name }}">
                                </a>
                                <ul class="list-inline mt-3">
                                    <li class="list-inline-item"><i class="fas fa-money-check"></i> Price : {{ $post->price}} MAD</li>
                                </ul>
                                <hr>
                                <p class="lead">{{ $post->name }}</p>
                                <a class="btn btn-outline-dark my-2" href="/detail/{{$post['id']}}" role="button">View more ...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="alert alert-danger">No post found</p>
                    @endif
                </div> <br />
                <!-- pagination -->
            </div>
             <!--Footer-->
          </section>
            <!-- latest plans-->  
    </div>
@endsection