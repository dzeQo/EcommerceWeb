@extends('master')
@section('title' ,'EcomWeb - Products' )
@section('content')
    <br><br/>
    <div class="container">
        <div class="tranding-wrapper">
            <h3>results of the searched item</h3><br/><br/>
            @foreach ($products as $item)
                    <div class="searched-item">
                        <a href="/detail/{{$item['id']}}">
                            <img class="tranding-img" src="{{$item['gallery']}}"  alt="...">
                            <div class="">
                                <h2>{{$item['name']}}</h2></a>
                                <h5>{{$item['description']}}</h5>
                            </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection