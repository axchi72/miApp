<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulo', 'MiApp') | COPEMH</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}">
        <!-- Sweetalert 2 -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.css")}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
        <!-- MyCss -->
        <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
        @yield('styles')
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include("theme/$theme/header")
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include("theme/$theme/sidebar")
            <!-- /.main Sidebar Container -->
            <!-- Content -->
            <div class="content-wrapper">
                @yield('contenido')
            </div>
            <!-- /.content -->
            <!-- Footer -->
            @include("theme/$theme/footer")
            <!-- /.footer -->
            <!-- Launch modal window to log in with more than one role -->
            @if (session()->get("roles") && count(session()->get("roles")) > 1)
            @csrf
            <div class="modal fade" id="modal-seleccionar-rol" data-rol-set="{{empty(session()->get("rol_id")) ? 'NO' : 'SI'}}" tabindex="-1" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Rolse de Usuario</h4>
                        </div>
                        <div class="modal-body">
                            <p>Cuentas con más de un Rol en la plataforma, a continuación seleccione con cual de ellos desea
                                ingresar</p>
                            @foreach (session()->get("roles") as $key => $rol)
                            <li>
                                <a href="#" class="asignar-rol" data-rolid="{{$rol['id']}}" data-rolnombre="{{$rol["nombre"]}}">
                                    {{$rol["nombre"]}}
                                </a>
                            </li>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            @endif
            <!-- /. launch modal-->
        </div>
        <!-- jQuery -->
        <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- DataTables -->
        <script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        @yield('scriptsPlugins')
        <!-- JQuery Validation -->
        <script src="{{asset("assets/$theme/plugins/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/jquery-validation/localization/messages_es.min.js")}}"></script>
        <!-- Sweetalert2 -->
        <script src="{{asset("assets/$theme/plugins/sweetalert2/sweetalert2.min.js")}}"></script>
         <!-- Toastr -->
         <script src="{{asset("assets/$theme/plugins/toastr/toastr.min.js")}}"></script>
        <script src="{{asset("assets/js/scripts.js")}}"></script>
        <script src="{{asset("assets/js/funciones.js")}}"></script>

        @yield('scripts')

        <script>
            $(function () {
              $("#tabla-data").DataTable({
                "responsive": true,
                "autoWidth": false,
              });
            });
          </script>
    </body>
</html>
