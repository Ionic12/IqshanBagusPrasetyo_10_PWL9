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
                    <li class="list-group-item"><b>Models       : </b>{{ $Gravel ->models }}</li>
                    <li class="list-group-item"><b>Type         : </b>{{ $Gravel ->type }}</li>
                    <li class="list-group-item"><b>Wheels       : </b>{{ $Gravel ->wheels }}</li>
                    <li class="list-group-item"><b>Chain        : </b>{{ $Gravel ->chain }}</li>
                    <li class="list-group-item"><b>Shifters     : </b>{{ $Gravel ->shifters }}</li>
                    <li class="list-group-item"><b>handlebar    : </b>{{ $Gravel ->handlebar }}</li>
                    <li class="list-group-item"><b>Caliper      : </b>{{ $Gravel ->caliper }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/gravel">Kembali</a>
        </div>
    </div>
</div>
@endsection