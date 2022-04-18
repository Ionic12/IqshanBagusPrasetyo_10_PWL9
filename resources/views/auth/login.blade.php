@extends('layout.nav')
@section('content')
<link rel="stylesheet" href="css/auth.css">
<section class="h-100 gradient-form" style="background-color: black;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-5 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <img src="data:image/png;base64,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"
                      style="width: 185px; margin-top:10px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">THE TRIATHLETES</h4>
                  </div>
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
                  <form method="post" action="/login">
                    @csrf
                    <p>Please login to your account</p>
                    <div class="form-outline mb-4">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="form-outline mb-4">
                      <label for="password">Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-outline-danger btn-block fa-lg mb-3" type="submit">Login</button>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2" style="margin-right: 5px">Don't have an account? </p>
                      <button type="button" class="btn btn-outline-danger" onclick="location.href='/register'">Create new</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4 ">OUR TEAMS</h4>
                  <p class="small mb-0" style="text-align: justify;">Since our inception, Cervélo's unwavering objective has been to engineer bikes that make you go faster. A very important part of our program is working closely with the world's best athletes in time trial, road cycling, and track cycling. The feedback of our racers in testing and racing helps us to continually improve our offerings to you. We are proud to support these incredible athletes as they strive to be the best they can be.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection