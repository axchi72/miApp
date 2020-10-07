@extends("theme.$theme.template")

@section('titulo')
Actualizar Datos
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
<script src="{{asset("assets/pages/scripts/frontend/afiliados/crear.js")}}" type="text/javascript"></script>
@endsection

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
                    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Actualización de datos</li>
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
                        <a href="{{ route('inicio') }}" class="btn btn-block btn-outline-primary">
                            <i class="fas fa-reply-all"></i> Volver al inicio
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Actualización de Datos</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('guardar_afiliado') }}" id="form-general"
                            class="form-horizontal form--label-right" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="nombre" id="nombre" class="form-control"
                                            value="{{old('nombre', $data->nombre ?? '')}}" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-lg-3 col-form-label requerido">E-Mail</label>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{old('email', $data->email ?? '')}}" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="celular" class="col-lg-3 col-form-label requerido">Celular</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="celular" id="celular" class="form-control"
                                            value="{{old('celular', $data->celular ?? '')}}" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-lg-3 col-form-label">Foto</label>
                                    <div class="col-lg-5">
                                        <input type="file" name="foto_up" id="foto"
                                            data-initial-preview="{{isset($data->foto) ? Storage::url("img/afiliados/$data->foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Imagen+Afiliado"}}"
                                            accept="image/*" />
                                    </div>
                                </div>

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
