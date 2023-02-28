<!doctype html>
<html lang="en">
  <head>
    @include('header')
  </head>
  <body>
    @include('nav')
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="text1">
                <div style="color:#A08420; font-size:24px;">PILIHAN TERBAIK <br></div> 
                <b class="" style="">PAYMENT AGENT SPP</b> <br>
                <div style="font-size: 22px;">ANDA CUKUP DENGAN TRANSFER SAJA, <br>
                TANPA HARUS RIBET DATANG KE SEKOLAH</div> 
            </div>
            <div class="buttons">
              <a href="{{ route('login') }}" class="btn btn-primar text-white">Login</a>
              <a href="{{ route('register') }}" class="btn btn-outline-secondar ms-3">Register</a>
            </div>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('sneat') }}/assets/img/hero.png" alt="Hero" class="w-100">
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <footer class=" my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a href="" class="nav-link px-2 text-muted">Home</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link px-2 text-muted">Features</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link px-2 text-muted">FaQs</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link px-2 text-muted">About</a>
        </li>
      </ul>
      <p class="text-center text-muted">&copy; 2023 SIPP</p> 
  </footer>
</html>