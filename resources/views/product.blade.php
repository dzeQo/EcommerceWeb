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
        <div class="tranding-wrapper">
            <h3>Tranding Products</h3>
            @foreach ($products as $item)
                    <div class="tr-elem">
                        <a href="/detail/{{$item['id']}}">
                            <img class="tranding-img" src="{{$item['gallery']}}"  alt="...">
                            <div class="">
                                <h5>{{$item['name']}}</h5>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
@endsection