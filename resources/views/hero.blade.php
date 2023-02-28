@include('landing-page')
@section('content')
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
@endsection
