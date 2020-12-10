@extends("theme.$theme.layout")

@section('titulo')
    Editar
@endsection

@section('styles')
<link href="{{asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('scriptsPlugins')
<script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/frontend/afiliados/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sistema de Afiliados</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('afiliado') }}">Sistema de Afiliados</a></li>
            <li class="breadcrumb-item active">Actualizar Afiliado</li>
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
                <h3 class="card-title">Actualizar Afiliado</h3>

                <div class="card-tools">
                    <a href="{{ route('afiliado') }}" class="btn btn-block btn-outline-primary">
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
            <form action="{{ route('actualizar_afiliado') }}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
                @csrf
                        <div class="card-body">
                            @include('afiliado.form')
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        @include('includes.boton-form-editar')
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


