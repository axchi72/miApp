<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('titulo', 'MiApp') | COPEMH</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- Nivo-slider-->
  <link rel="stylesheet" type="text/css" href="{{asset("assets/js/nivo-slider/css/nivo-slider.css")}}" />
        <link href="{{asset("assets/js/nivo-slider/themes/light/light.css")}}" rel="stylesheet" type="text/css"/>

  @yield('styles')
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  @include("theme/$theme/nav")
  <!-- /.navbar -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Nivo-Slider -->
            <div class="slider-wrapper theme-light">
                <div id="slider" class="nivoSlider">
                    <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_1.jpg")}}" />
                    <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_2.jpg")}}" />
                    <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_3.jpg")}}" />
                    <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_4.jpg")}}" />
                </div>
            </div>
            <!-- /.nivo-slider -->
        </div>
    </div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('contenido')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include("theme/$theme/footer")
  <!-- /.main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- jQuery -->
<script src="{{asset("assets/js/nivo-slider/js/1.12.4-jquery.min.js")}}"></script>
<!-- Nivo-Slider -->
    <script src="{{asset("assets/js/nivo-slider/js/jquery.nivo.slider.js")}}"></script>
    <script type="text/javascript">
    $(window).load(function(){
        $('#slider').nivoSlider();
    });
    </script>
@yield('scripts')
</body>
</html>
