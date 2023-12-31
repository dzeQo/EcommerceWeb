@extends('master')

@section('title' , 'EcomWeb - Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex align-items-center justify-content-center vh-100">  
            <div class="col-sm-4">
                <br/><br/>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address</label>
                            <input type="email" name="email" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example2">Password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                                <label class="form-check-label" for="form2Example34"> Remember me </label>
                            </div>
                            </div>

                            <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="/register">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-info btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-info btn-floating mx-1">
                            <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-info btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-info btn-floating mx-1">
                            <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
            </div>
        </div> 
    </div>
</div>
@endsection
