@extends("theme.$theme.layout")

@section('titulo')
Acceso Denegado
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Acceso Denegado</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('includes.mensaje')
                <!-- Default box -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">no tiene acceso a esta opción</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            <img src="{{asset("assets/img/denegado.png")}}" />
                        </p>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <p>
                            Comuníquese con el administrador.
                            <a href="/admin" class="btn btn-primary" title="ir al inicio">
                                <i class="fas fa-reply-all"></i>
                            </a>
                        </p>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection
