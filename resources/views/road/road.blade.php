@extends('layout.nav')
@section('content')
<link rel="stylesheet" href="css/bike.css">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../img/road/back-1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>{{ $carrousel1 }}</h1>
                <h3>{{ $desc1 }}</h3>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/road/back-2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h1>{{ $carrousel2 }}</h1>
            <h3>{{ $desc2 }}</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/road/back-3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h1>{{ $carrousel3 }}</h1>
            <h3>{{ $desc3 }}</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<section class="spage" style="background-image: url(../img/road/road-1.jpg)">
    <div class="srectangle">
        <div class="smain">
            <div class="sdesc-text">
                <h2>{{ $type1 }}<span> SERIES</span></h2>
                <h3>{{ $typedesc1 }}</h3>
            </div>
        </div>
    </div>
</section>
<section class="tpage" style="background-image: url(../img/road/road-2.jpg)">
    <div class="trectangle">
        <div class="tmain">
            <div class="tdesc-text">
                <h2>{{ $type2 }}<span> SERIES</span></h2>
                <h3>{{ $typedesc2 }}</h3>
            </div>
        </div>
    </div>
</section>
<section class="fpage">
    <div class="fsect">
        <div class="text">
            <br>
            <h1 class="fhead">SPECIFI<span>CATION</span></h1>
        </div>
    </div>
    @auth
    <div class="float-center my-2">
        <a class="btn btn-outline-danger" href="{{ route('road.create') }}">Input Data Spec</a>
    </div>
    @endauth
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered table-responsive-md">
    <tr>
    <th>models</th>
    <th>type</th>
    <th>wheels</th>
    <th>chain</th>
    <th>shifters</th>
    <th>handlebar</th>
    <th>caliper</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($road as $rd)
    <tr>
    <td>{{ $rd -> models }}</td>
    <td>{{ $rd -> type }}</td>
    <td>{{ $rd -> wheels }}</td>
    <td>{{ $rd -> chain }}</td>
    <td>{{ $rd -> shifters }}</td>
    <td>{{ $rd -> handlebar }}</td>
    <td>{{ $rd -> caliper }}</td>
    <td style="text-align: center">
        <form action="{{ route('road.destroy',['road'=>$rd->id]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('road.show',$rd->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('road.edit',$rd->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
    </table>
    {{ $road->links() }}
</section>
@endsection