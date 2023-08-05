@extends('master')

@section('title' , 'EcomWeb - Sign Up')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex align-items-center justify-content-center vh-100">  
            <div class="col-sm-4">
                <br/><br/>
                    <form action="/signin" method="POST">
                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1">UserName</label>
                                <input type="text" placeholder="enter a valid Username" required name="name" class="form-control" />
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email address</label>
                            <input type="email" placeholder="enter a valid email" required name="email" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example2">Password</label>
                            <input type="password" placeholder="enter a password" required name="password" class="form-control" />
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example2">Retype Password</label>
                            <input type="password" placeholder="re-enter the same password" required name="cpass" class="form-control" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

                        {{-- sign in --}}
                        <div class="text-center">
                            <p>already  a member? <a href="/login">Login</a></p>
                        </div>
                    </form>
            </div>
        </div> 
    </div>
</div>
@endsection