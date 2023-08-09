<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="{{asset('styles')}}/css/login.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <div class="card">
          @if($errors)
            @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
            @endforeach
          @endif

          @if(Session::has('error'))
          <p class="text-danger">{{session('error')}}</p>
          @endif
          
          <form class="box" method="post">
            @csrf
                <h1>Login</h1>
                <p class="text-muted">Please enter your login and password!</p>
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" />
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" />
                <a class="forgot text-muted" href="#">Forgot password?</a>
                <input type="submit"  class="btn btn-primary btn-block" />
            <div class="col-md-12">
              <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a>
                </li>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>

</html>