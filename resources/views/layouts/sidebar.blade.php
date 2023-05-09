<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
         {{-- <img src="{{ asset('sneat') }}/assets/img/icons/brans/logo.png" alt="Logo" srcset=""> --}}
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
      <li class="menu-item {{ \Route::is('user.*') ? 'active' : '' }}">
        <a href="{{ route('user.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">data Petugas</div>
        </a>
      </li>
      <li class="menu-item {{ \Route::is('wali.*') ? 'active' : '' }}">
        <a href="{{ route('wali.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">data wali siswa</div>
        </a>
      </li>
      <li class="menu-item {{ \Route::is('siswa.*') ? 'active' : '' }}">
        <a href="{{ route('siswa.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">data Siswa</div>
        </a>
      </li>
    </ul>
  </aside>