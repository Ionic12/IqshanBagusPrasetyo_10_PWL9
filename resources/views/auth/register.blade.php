@extends('layout.nav')
@section('content')
<link rel="stylesheet" href="css/auth.css">
<section class="text-center text-lg-start">
    <style>
        body{
            padding-top: 30px;
        }
        .cascading-right {
            margin-right: -50px;
        }
        @media (max-width: 980.90px) {
            .cascading-right {
            margin-right: 0;
            }
        }
    </style>
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="background-color:white">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign up now</h2>
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                  </div>
                @endif
                <form method="post" action="/register" id="myForm">
                @csrf
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{ old('firstname') }}">
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}">
                    </div>
                  </div>
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>  
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-danger btn-block mb-4">
                  Sign up
                </button>
                <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2" style="margin-right: 5px">Already Have Account?</p>
                    <button type="button" class="btn btn-outline-danger" onclick="location.href='/login'">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
</section>
@endsection