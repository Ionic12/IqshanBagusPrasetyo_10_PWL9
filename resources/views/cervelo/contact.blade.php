@extends('layout.nav')
@section('content')
  <link rel="stylesheet" href="css/contact.css">
    <div class="slider">
      <div class="rectangle">
        <div class="content">
          <h1 style="font-size: 80px;">CONTACT CUSTOMER SERVICE</h1>
        </div>
      </div>
    </div>
    <section class="container fsect">
        <p>In light of the global health crisis, we're following all government guidelines to keep our people, and our communities, safe. Though things are far from normal, we're still here to help. Please feel free to ask us directly using the general inquiries form below and we will email you with a response within 24-48 hours.</p><br>
        <p>If you have a question, chances are someone else has too. Before contacting Customer Service check out our Frequently Asked Questions.</p>
        <div class="card-body">
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
            <form method="post" action="/contact" id="myForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{ auth()->user()->firstname }}">
              </div>
              <div class="form-group col-md-6">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ auth()->user()->lastname }}">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ auth()->user()->email }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" placeholder="City">
              </div>
              <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" placeholder="State">
              </div>
              <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" name="zip" placeholder="Zip">
              </div>
            </div>
            <div class="form-group">
                <label for="question">Question</label>
                <textarea class="form-control" name="question" rows="3" placeholder="Your Question"></textarea>
            </div>
            <div class="area">
                <button class="btn sbutton btn-outline-danger " type="submit">SUBMIT YOUR QUESTION</button>
            </div>
          </form>
        </div>        
@endsection