@extends("theme.$theme.layout")

@section('titulo')
    Crear Menú
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sistema de Menús</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('menu') }}">Sistema de Menús</a></li>
            <li class="breadcrumb-item active">Crear Menús</li>
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
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Mantenimiento de registros</h3>
                        </div>
                        <!-- /.card-header -->
            <form action="{{ route('guardar_menu') }}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                        <div class="card-body">
                            @include('admin.menu.form')
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


