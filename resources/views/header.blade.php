<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if (Session::has('user')){
    $total = ProductController::showCart();
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Logo (left) -->
    <a class="navbar-brand" href="#">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2L5yANkUMwwC4ATP-TCmwU779AR1FXaw1eA&usqp=CAU" alt="Logo" width="180" height="30">
    </a>

    <!-- Navbar Items (middle) -->
    <div class="navbar-nav mx-auto">
      <a class="nav-link" href="/">Home</a>
      <a class="nav-link" href="#">Features</a>
      <a class="nav-link" href="#">About</a>
      <a class="nav-link" href="#">FAQs</a>
      <a class="nav-link" href="#">Contact</a>
    </div>

    <!-- Right-aligned Icons -->
    <div class="d-flex">
      <a class="nav-link" href="#">
        <i class="bi bi-cart4">cart({{$total}})</i> <!-- Replace with store cart icon -->
      </a>
      @if (Session::has('user'))
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-user"></i>    {{Session::get('user')['name']}}    </a>
        <div class="dropdown-menu">
            <a href="/logout" class="dropdown-item">Logout</a>
        </div>
      </div>
      @endif
      @auth()
      <a class="nav-link" href="{{ route('login') }}">
        <i class="bi bi-person"></i> Login<!-- Replace with login icon -->
      </a>
      @endauth()
    </div>
  </div>
</nav>
<div class="row height d-flex justify-content-center align-items-center">
  <div class="col-md-8">
    <form action="/search">
      <div class="search">
        <i class="fa fa-search"></i>
        <input type="text" name="query" class="form-control" placeholder="Searh anyting ...">
        <button class="btn btn-outline-info">Search</button>
      </div>
    </form>               
  </div>                    
</div>