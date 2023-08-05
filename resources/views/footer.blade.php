<footer class="footer mt-auto py-3 bg-dark">
    <div style="clear: both;" class="container text-center">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <!-- Navbar links -->
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav border-bottom pb-3 mb-3">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              @if (Session::has('user'))
                <a class="nav-link" href="/myorders">My Orders</a>
              @endif
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <!-- Social Media Links -->
       <div class="social-links mt-3">
        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
      </div><br>
      <span class="text-muted">Your Footer Content &copy; 2023</span>
    </div>
  </footer>