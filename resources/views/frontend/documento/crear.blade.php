@extends("theme.$theme.layout")

@section('titulo')
    Crear Documento
@endsection

@section('styles')
    <link href="{{asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet"  type="text/css"/>
@endsection

@section('scriptsPlugins')
<script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/frontend/documento/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Documentos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('documento') }}">Documentos</a></li>
            <li class="breadcrumb-item active">Crear Documento</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            <!-- Default box -->
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Crear</h3>

                <div class="card-tools">
                    <a href="{{ route('documento') }}" class="btn btn-block btn-outline-primary">
                        <i class="fas fa-reply-all"></i> Volver al listado
                    </a>
                </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Mantenimiento de registros</h3>
                        </div>
                        <!-- /.card-header -->
            <form action="{{ route('guardar.documento') }}" id="form-general" class="form-horizontal" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                        <div class="card-body">
                            @include('frontend.documento.form')
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
                <!-- /.card-footer-->
            </form>
            </div>
        <!-- /.card -->
        </div>
      </div>
  </section>
  <!-- /.content -->

@endsection


