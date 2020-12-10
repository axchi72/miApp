<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="{{asset("assets/img/copemh.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">COPEMH</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('inicio')}}" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('acercaDe')}}" class="nav-link"><i class="fas fa-house-user"></i> Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('servicios')}}" class="nav-link"><i class="fas fa-server"></i> Servicios</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('actualizar')}}" class="nav-link"><i class="fas fa-chalkboard-teacher"></i> Actualización</a>
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i> {{session()->get('nombre_usuario', 'Invitado')}}
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
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Cambiar Rol</a>
                    @endauth
                    

                </div>
            </li>
        </ul>
    </div>
</nav>
