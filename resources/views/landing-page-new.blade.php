<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIPP</title>
    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/css/landing-new.css">
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="{{ asset('sneat') }}/assets/img/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="{{ asset('sneat') }}/assets/img/icons/brands/logo.png" alt="Logo" />
              <h3>SIPP</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#" class="btn">Daftar</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Pilihan Terbaik</h1>
                <h1>Payment Agent SPP</h1>
              </div>
              <p class="text">
                ANDA CUKUP DENGAN TRANSFER SAJA , TANPA HARUS RIBET DATANG KE SEKOLAH
              </p>
              <div class="cta">
                <a href="{{ route('login') }}" class="btn btn-primar text-white">Masuk Sekarang!</a>
              </div>
            </div>

            <div class="right">
              <img src="{{ asset('sneat') }}/assets/img/hero.png" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{ asset('sneat') }}/assets/js/app.js"></script>
  </body>
</html>
