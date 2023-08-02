<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Link Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    {{-- compiled css from bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- js from bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('title'  , 'Unknown Page')</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
    img.slider-img{
        margin-top: 95px;
        height: 300px !important;
        border-radius: 10px;
    }
    .custom-product{
        background-color: teal;
        border-radius: 10px;
        height: 500px;
    }
    .tranding-img{
        height: 100px;
        border-radius: 5px;
    }
    .tr-elem{
       display: inline-flex;
       margin: 30px;
       width: 12%;
       margin-right: 100px;
    }
    .tranding-wrapper{
        margin: 50px;
        padding-left: 5%;
    }
    .detail-img{
        height: 300px;
        margin: 50px;
        border-radius: 5px;
    }
    .social-links {
      list-style: none;
      display: flex;
      justify-content: center;
      margin: 1rem 0;
    }
    .social-icon {
      width: 40px;
      height: 40px;
      border-radius: 25px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 0.5rem;
      color: #ffffff;
      background-color: darkgray;
      font-size: 1.5rem;
    }
    .social-icon:hover {
      background-color: #0056b3;
    }
    .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
         
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


       }


       .search input:focus{

        box-shadow: none;
        border: 2px solid blue;


       }

       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;

       }

       .search button{

        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
       }
</style>
<!-- Link Font Awesome JS (optional, for some advanced features) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</html>
