<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i> {{session()->get('usuario', 'Invitado')}} - {{session()->get('rol_nombre', 'Guest')}}

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @guest
            <a href="{{route('login')}}" class="dropdown-item">
                <i class="fas fa-sign-in-alt mr-2"></i> Login
            </a>
            @endguest
            @auth
            <a href="{{route('logout')}}" class="nav-link">
                <i class="fas fa-sign-out-alt mr-2"></i> Salir
            </a>
            @endauth
          <div class="dropdown-divider"></div>
          @if(session()->get("roles") && count(session()->get("roles")) > 1)
          <a href="#" class="cambiar-rol dropdown-item dropdown-footer">
            <i class="fas fa-exchange-alt"></i> Cambiar Rol
          </a>
          @endif
        </div>
      </li>
    </ul>
  </nav>
