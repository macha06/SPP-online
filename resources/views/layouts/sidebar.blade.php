<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
          <img src="{{ asset('sneat') }}/assets/img/icons/brands/logo.png" alt="Logo" srcset="" width="20%">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">E-Spp</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ \Route::is('admin.beranda') ? 'active' : '' }}">
        <a href="{{ route('admin.beranda') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Beranda</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Data User</span></li>
      <li class="menu-item {{ \Route::is('user.*') ? 'active' : '' }}">
        <a href="{{ route('user.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user"></i>
          <div data-i18n="Basic">Data Petugas</div>
        </a>
      </li>
      <li class="menu-item {{ \Route::is('wali.*') ? 'active' : '' }}">
        <a href="{{ route('wali.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div data-i18n="Basic">Data wali siswa</div>
        </a>
      </li>
      <li class="menu-item {{ \Route::is('siswa.*') ? 'active' : '' }}">
        <a href="{{ route('siswa.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-face"></i>
          <div data-i18n="Basic">Data Siswa</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Pembayaran</span></li>
      <li class="menu-item {{ \Route::is('banksekolah.*') ? 'active' : '' }}">
        <a href="{{ route('banksekolah.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-bank"></i>
          <div data-i18n="Basic">Rekening Sekolah</div>
        </a>
      </li>
      <li class="menu-item {{ \Route::is('biaya.*') ? 'active' : '' }}">
        <a href="{{ route('biaya.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-receipt"></i>
          <div data-i18n="Basic">Data Biaya</div>
        </a>
      </li>
      <li class="menu-item {{ \Route::is('tagihan.*') ? 'active' : '' }}">
        <a href="{{ route('tagihan.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-receipt"></i>
          <div data-i18n="Basic">Data Tagihan</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Option</span></li>
      <li class="menu-item {{ \Route::is('tagihan.*') ? 'active' : '' }}">
        <a href="{{ route('logout') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-power-off me-2" style='color:#f31414'></i>
          <div data-i18n="Basic">Log-out</div>
        </a>
      </li>
    </ul>
  </aside>