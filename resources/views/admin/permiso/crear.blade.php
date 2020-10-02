@extends("theme.$theme.layout")

@section('titulo')
Sistema Permisos
@endsection

@section('scripts')
<script src="{{ asset("assets/pages/scripts/admin/permiso/crear.js") }}"></script>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sistema de Permisos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{route('permiso')}}">Permisos</a></li>
                    <li class="breadcrumb-item active">Crear Permiso</li>
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
                <!-- Default box -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Crear Permiso</h3>

                        <div class="card-tools">
                            <a href="{{ route('permiso') }}" class="btn btn-block btn-outline-info">
                                <i class="fas fa-reply-all"></i> Volver al listado
                            </a>
                        </div>
                    </div>
                    <form action="{{route('guardar_permiso')}}" id="form-general"
                        class="form-horizontal form--label-right" method="POST" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            @include('admin.permiso.form')
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                @include('includes.boton-form-crear')
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <!-- /.card-footer-->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection
