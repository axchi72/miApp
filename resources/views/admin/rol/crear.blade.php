@extends("theme.$theme.layout")

@section('titulo')
    Crear Rol
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sistema de Roles</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('rol') }}">Sistema de Rol</a></li>
            <li class="breadcrumb-item active">Crear Rol</li>
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
                    <a href="{{ route('rol') }}" class="btn btn-block btn-outline-primary">
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
            <form action="{{ route('guardar_rol') }}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
                @csrf
                        <div class="card-body">
                            @include('admin.rol.form')
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


