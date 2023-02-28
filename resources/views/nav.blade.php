<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
         <b class="brand"> <img src="{{ asset('sneat') }}/assets/img/icons/brands/logo.png" alt="Brand" width="50px" height="50px">SIPP</b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ \Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
          <a class="nav-link {{ \Route::is('contact') ? 'active' : '' }}" href="#">Contact</a>
          <a class="nav-link {{ \Route::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a>
          <a class="nav-link me-5 {{ \Route::is('formation') ? 'active' : '' }}" href="{{ url('formation') }}">Formation</a>
        </div>
        <a href="" class="btn btn-outline-secondar shadow-sm d-sm d-block">Coba Login</a>
      </div>
    </div>
  </nav>