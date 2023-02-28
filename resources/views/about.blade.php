<!doctype html>
<html lang="en">
  <head>
    @include('header')
  </head>
  <body>
    @include('nav')
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