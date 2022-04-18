@extends('layout.nav')
@section('content')
<style>
    body{
        background: black;
        color: white;
    }
    .container{
        padding-left :410px;
        padding-right: 410px;
        padding-bottom: 10px; 
        align-items: center;
    }
    .list-group-item{
        background-color: #303030;
    }
</style>
<div class="container" style="padding-top: 85px;">
    <div class="card" style="width: 25rem; background-color: #202020;">
        <div class="card-header" style="text-align:center">
            <div class="card-header">
                Detail Spec
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Models       : </b>{{ $Road ->models }}</li>
                    <li class="list-group-item"><b>Type         : </b>{{ $Road ->type }}</li>
                    <li class="list-group-item"><b>Wheels       : </b>{{ $Road ->wheels }}</li>
                    <li class="list-group-item"><b>Chain        : </b>{{ $Road ->chain }}</li>
                    <li class="list-group-item"><b>Shifters     : </b>{{ $Road ->shifters }}</li>
                    <li class="list-group-item"><b>handlebar    : </b>{{ $Road ->handlebar }}</li>
                    <li class="list-group-item"><b>Caliper      : </b>{{ $Road ->caliper }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/road">Kembali</a>
        </div>
    </div>
</div>
@endsection