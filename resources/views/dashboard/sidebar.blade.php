  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Company</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                <i class="fa fa-dashboard" aria-hidden="true">Dashboard</i>
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          {{-- Keranjang --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <p>
                Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('barang.index') }}" class="nav-link">
                  <i class="fas fa-shopping-cart"></i>
                  <p>
                    Semua Barang
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-cart-plus"></i>
                  <p>
                    Tambah Barang
                  </p>
                </a>
              </li>
            </ul>
          </li>
          {{-- /Keranjang --}}

          {{-- Customer --}}
          <li class="nav-item">
            <a href="{{ route('barang.index') }}" class="nav-link">
              <i class="fas fa-user-friends"></i>
              <p>
                Customer
              </p>
            </a>
          </li>
          {{-- /Customer --}}

          {{-- Transaksi --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-scroll"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-invoice"></i>
                  <p>
                    Semua Transaksi
                  </p>
                </a>
              </li>
            </ul>
          </li>
          {{-- /Transaksi --}}

          {{-- User --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>All User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>
                    Add User
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-id-card"></i>
                    <p>
                      Profile
                    </p>
                </a>
              </li>
            </ul>
          </li>
          {{-- /User --}}

          {{-- Log Out --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout')}}"
              onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
              <i class="fas fa-power-off"></i>
              {{ __('Keluar') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
          {{-- /Log Out --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>