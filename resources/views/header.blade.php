<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Logo (left) -->
    <a class="navbar-brand" href="#">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2L5yANkUMwwC4ATP-TCmwU779AR1FXaw1eA&usqp=CAU" alt="Logo" width="180" height="30">
    </a>

    <!-- Navbar Items (middle) -->
    <div class="navbar-nav mx-auto">
      <a class="nav-link" href="#">Home</a>
      <a class="nav-link" href="#">Features</a>
      <a class="nav-link" href="#">About</a>
      <a class="nav-link" href="#">FAQs</a>
      <a class="nav-link" href="#">Contact</a>
    </div>

    <!-- Right-aligned Icons -->
    <div class="d-flex">
      <a class="nav-link" href="#">
        <i class="bi bi-cart4">cart</i> <!-- Replace with store cart icon -->
      </a>
      <a class="nav-link" href="{{ route('login') }}">
        <i class="bi bi-person"></i> Login<!-- Replace with login icon -->
      </a>
    </div>
  </div>
</nav>