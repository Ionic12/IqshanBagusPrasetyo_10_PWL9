@extends('layout.nav')
@section('content')
    <style>
        body{
            font-family: 'Josefin Sans';
            background-color: #000;
            color: white;
        }
        .container{
            padding-top: 50px;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 50rem; background-color: #202020;">
                <div class="card-header" style="text-align:center">
                    Add Spec
                </div>
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
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <form method="post" action="{{ route('road.store') }}" id="myForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="models">Models</label>
                            <input type="text" name="models" class="form-control" id="models" aria-describedby="models" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="type">Type</label>
                            <input type="text" name="type" class="form-control" id="type" aria-describedby="type" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="wheels">Wheels</label>
                            <input type="text" name="wheels" class="form-control" id="wheels" aria-describedby="wheels" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="chain">Chain</label>
                            <input type="text" name="chain" class="form-control" id="chain" aria-describedby="chain" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="shifters">Shifters</label>
                            <input type="text" name="shifters" class="form-control" id="shifters" aria-describedby="shifters" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="handlebar">Handlebar</label>
                            <input type="text" name="handlebar" class="form-control" id="handlebar" aria-describedby="handlebar" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="caliper">Caliper</label>
                        <input type="text" name="caliper" class="form-control" id="caliper" aria-describedby="caliper" >
                    </div>
                    <button type="submit" class="btn btn-outline-danger ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection