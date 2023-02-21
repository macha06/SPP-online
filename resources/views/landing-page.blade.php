<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPP Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/css/landing.css"">
  </head>
  <body>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link me-5" href="#">Features</a>
          </div>
          <a href="" class="btn btn-outline-secondar shadow-sm d-sm d-block">Coba Login</a>
        </div>
      </div>
    </nav>

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
    <section class="setup">
      <div class="container">
        <div class="text-header text-center">
          <h3>Get Started quickly without the hassle</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="items text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icons">
                <img src="{{ asset('sneat') }}/assets/img/add-user.png" alt="">
              </div>
              <div class="desc">
                <h5>Create account</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam illum aut sunt harum delectus corporis</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icons">
                <img src="{{ asset('sneat') }}/assets/img/payment-method.png" alt="">
              </div>
              <div class="desc">
                <h5>Lakukan Pembayaran</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam illum aut sunt harum delectus corporis</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icons">
                <img src="{{ asset('sneat') }}/assets/img/email.png" alt="">
              </div>
              <div class="desc">
                <h5>Pembayaran Terkonfirmasi</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam illum aut sunt harum delectus corporis</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="information">
      <div class="container">
        <div class="row info-1">
          <div class="col-md-6">
            <div class="text-information">
              <h5>Get more costumer for you bussines</h5>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere error illo est nisi eum nobis similique aperiam omnis libero? Porro.</p>
            </div>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('sneat') }}/assets/img/logo1.png"" alt="" class="w-100">
          </div>
        </div>
        <div class="row info-1">
          <div class="col-md-6">
            <img src="{{ asset('sneat') }}/assets/img/logo1.png"" alt="" class="w-100">
          </div>
          <div class="col-md-6">
            <div class="text-information">
              <h5>Get more costumer for you bussines</h5>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere error illo est nisi eum nobis similique aperiam omnis libero? Porro.</p>
            </div>
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