<nav class="navbar fixed-top navbar-expand-lg py-2 navbar-dark">
    <a class="navbar-brand" href="{!! url('index'); !!}">Cervélo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
      <ul class="navbar-nav">
        @auth
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/index">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Add Content") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Content
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="hcontent/content">Home</a>
            <a class="dropdown-item" href="rcontent/content">Road</a>
            <a class="dropdown-item" href="tcontent/content">Time Trial</a>
            <a class="dropdown-item" href="gcontent/content">Gravel</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Bikes") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bikes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/road">Road</a>
            <a class="dropdown-item" href="/time">Time Trial</a>
            <a class="dropdown-item" href="/gravel">Gravel</a>
          </div>
        </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link {{ ($title === "History") ? 'active' : '' }}" href="/about">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Contact Us") ? 'active' : '' }}" href="/contact">Contact Us</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item">
        <a class="nav-link disabled" href=""></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome , {{ auth()->user()->firstname }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/dashboard">Dashboard</a>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" a class="dropdown-item">Log Out</button>
          </form>
        </div>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      @endauth
    </ul>
</nav>