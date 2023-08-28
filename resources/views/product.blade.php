@extends('master')
@section('title' ,'EcomWeb - Products' )
@section('content')
<br><br/><br><br/><br><br/><br><br/>
<div class="container mt-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        @foreach($recents as $index => $item)
        <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
          <img src="{{$item->gallery}}" class="carousel-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5><a href="{{url('/detail/'.$item->id)}}">{{$item->name}}</a></h5>
            <p>{{$item->category}}</p>
          </div>
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
                        @foreach($products as $prd)
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