@extends('layout.nav')
@section('content')
    <link rel="stylesheet" href="css/home.css">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../img/home/home-1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{ $part1 }}</h1>
                    <h3>{{ $desc1 }}</h3>
                </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../img/home/home-2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                    <h1>{{ $part2 }}</h1>
                    <h3>{{ $desc2 }}</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../img/home/home-3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                    <h1>{{ $part3 }}</h1>
                    <h3>{{ $desc3 }}</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../img/home/home-4.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                    <h1>{{ $part4 }}</h1>
                    <h3>{{ $desc4 }}</h3>
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
    <section class="spage">
        <h1 class="shead">CERVÉLO <span>TYPE</span></h1>
        <div class="box">
            <div class="col-3">
                <img class="bike-img" src="../img/home/Road3d.png" height="260px" width="260px">
                <p class="nama">Road Series</p>
                <button class="btn sbutton btn-outline-danger " onclick="location.href='/road'">Details</button>
            </div>
            <div class="col-3">
                <img class="bike-img" src="../img/home/Time3d.png" height="260px" width="260px">
                <p class="nama">Time Trial Series</p>
                <button class="btn sbutton btn-outline-danger " onclick="location.href='/time'">Details</button>
            </div>
            <div class="col-3">
                <img class="bike-img" src="../img/home/Gravel3d.png" height="260px" width="260px">
                <p class="nama">Gravel Series</p>
                <button class="btn sbutton btn-outline-danger " onclick="location.href='/gravel'">Details</button>
            </div>
        </div>
        <div class="ssect">
            <div class="stext">
                <h1 class="thead">CERVÉLO<span> AERO</span></h1>
                <h3>Since 1995, Cervélo has engineered innovative road and triathlon/time trial bikes. Whether you are a pro in the Tour de France, are taking on your first full distance triathlon, or simply enjoy riding on the weekends, we apply engineering, ambition, and passion to make a bike that is better for you. 
                </h3>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="../js/vanilla-tilt.min.js"></script>
	<script type="text/javascript">
			VanillaTilt.init(document.querySelectorAll(".col-3"), {
		    max: 25,
		    speed: 400
		});;
	</script>
@endsection