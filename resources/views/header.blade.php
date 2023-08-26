<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if (Session::has('user')){
    $total = ProductController::showCart();
  }
?>
<nav class="navbar navbar-expand-lg" style="background-color: #96B6C5;">
  <div class="container-fluid">
    <!-- Logo (left) -->
    <a class="navbar-brand" href="{{url('/') }}">
      <img src="{{asset('styles')}}/images/logo.png" alt="Logo" width="200" height="50">
    </a>

    
    <!-- Right-aligned Icons -->
    <div class="d-flex">
      @if (Session::has('user'))
      <a class="nav-link link-light " href="{{ url('cartList') }}">
        <i class="fas fa-shopping-bag"></i>  cart({{$total}}) 
      </a>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link link-light  dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-user"></i>    {{Session::get('user')['name']}}    </a>
        <div class="dropdown-menu">
            <a href="{{route('logout')}}" class="dropdown-item">Logout</a>
        </div>
      </div>
      @elseif (!Session::has('user'))
      <a class="nav-link  link-light " href="{{ url('login') }}">
        <i class="fas fa-sign-in-alt"></i>  Login<!-- Replace with login icon -->
      </a>
      <a class="nav-link link-light " href="{{ url('register') }}">
        <i class="fas fa-user-plus"></i> Sign Up<!-- Replace with login icon -->
      </a>
      @endif

      <a class="nav-link link-light mx-3" id="searchToggle" href="#">
        <i class="fas fa-search"></i>
      </a>
      <form action="{{url('search')}}" class="search-form d-none">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Search...">
            <button class="btn btn-outline-warning" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg"style="background-color: #96B6C5;">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav2">      
      <ul class="nav-menu clearfix unstyled">
        <li><a href="{{url('/') }}" class="three-d active">
          Home
          <span class="three-d-box"><span class="front">Home</span><span class="back">Home</span></span>
        </a></li>
        <li><a href="#" class="three-d">
          Categories
          <span class="three-d-box"><span class="front">Categories</span><span class="back">Categories</span></span>
        </a>
          <ul class="clearfix unstyled drop-menu">
            <li><a href="{{ url('/categories/phones')}}" class="three-d">
                Phones
                <span class="three-d-box"><span class="front">Phones</span><span class="back">Phones</span></span>
              </a></li>
              <li><a href="{{ url('/categories/clothes')}}" class="three-d">
                Clothes
                <span class="three-d-box"><span class="front">Clothes</span><span class="back">Clothes</span></span>
              </a></li>
              <li><a href="{{ url('/categories/sport')}}" class="three-d">
                Sports
                <span class="three-d-box"><span class="front">Sports</span><span class="back">Sports</span></span>
              </a></li>
              <li><a href="{{ url('/categories/gaming')}}" class="three-d">
                Gaming & Console
                <span class="three-d-box"><span class="front">Gaming & Console</span><span class="back">Gaming & Console</span></span>
              </a></li>
          </ul>
        </li>
        @if (Session::has('user'))
        <li><a href="{{ url('/myorders')}}" class="three-d">
          My Orders
          <span class="three-d-box"><span class="front">My Orders</span><span class="back">My Orders</span></span>
        </a></li>
        @endif
        <li><a href="{{ url('/about-us') }}" class="three-d">
          About Us
          <span class="three-d-box"><span class="front">About Us</span><span class="back">About Us</span></span>
        </a></li>
        <li><a href="{{ url('/contact-us') }}" class="three-d">
          Contact Us
          <span class="three-d-box"><span class="front">Contact Us</span><span class="back">Contact Us</span></span>
        </a></li>
      </ul>
    </div>
</nav>



