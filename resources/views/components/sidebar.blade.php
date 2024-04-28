<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Laundry</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            @if(auth()->user()->role == 'Pimpinan')

            @else
            <!-- Dashboard -->
            <li class="menu-item {{ request()->is('transaksi') ? 'active' : '' }}">
              <a href="{{route('transaksi')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Transaksi</div>
              </a>
            </li>
            @if(auth()->user()->role == 'Admin')
            

            <!-- Layanan -->
            <li class="menu-item {{ request()->is('layanan') ? 'active' : '' }}">
              <a href="{{route('layanan')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Layanan</div>
              </a>
            </li>
            @endif
            
            @endif

            <li class="menu-item {{ request()->is('konsumen') ? 'active' : '' }}">
              <a href="{{route('konsumen')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Konsumen</div>
              </a>
            </li>

            @if(auth()->user()->role == 'Admin')
            <li class="menu-item {{ request()->is('pengguna') ? 'active' : '' }}">
              <a href="{{route('pengguna')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics">Pengguna</div>
              </a>
            </li>
            @endif
        </aside>