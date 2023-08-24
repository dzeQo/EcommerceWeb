<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EcomWeb - Back Office</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('styles')}}/css/layout.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">T9edda Leya - BackOffice</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="{{url('/admin/dashboard')}}"><i class="fas fa-tachometer-alt"></i>  Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('admin/users')}}"><i class="fas fa-users"></i>  Users</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('admin/ManageP')}}"><i class="fas fa-store"></i>  Products</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('admin/ManageOrders')}}"><i class="fas fa-shopping-bag"></i>  Orders</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('admin/ManageCart')}}"><i class="fas fa-shopping-cart"></i>  Carts</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('admin/comment')}}"><i class="fas fa-comments"></i>  Comments</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users-cog"></i> Admin</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{url('/admin/logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                        <a class="dropdown-item" href="#!"><i class="fas fa-user-circle"></i> Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/admin/logout"><i class="fas fa-random"></i> switch account</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

        <!-- Core theme JS-->
        <script src="{{asset('styles')}}/js/layout.js"></script>
    </body>
</html>