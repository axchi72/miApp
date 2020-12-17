@extends("theme.$theme.template")

@section('titulo')
Actualizar Datos
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
            @include('includes.mensaje')
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
                        <form action="{{ route('guardar_afiliado') }}" id="form-general" role="form" method="POST"
                            autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="foto" class="col-lg-3 col-form-label">Foto</label>
                                    <div class="col-lg-5">
                                        <input type="file" name="foto_up" id="foto"
                                            data-initial-preview="{{isset($data->foto) ? Storage::url("img/afiliados/$data->foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Imagen+Afiliado"}}"
                                            accept="image/*" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="afiliacion" class="col-form-label requerido">Afiliación</label>
                                            <div>
                                                <input type="text" name="afiliacion" id="afiliacion"
                                                    class="form-control"
                                                    value="{{old('afiliacion', $data->afiliacion ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="escalafon" class="col-form-label requerido">Escalafón</label>
                                            <div>
                                                <input type="text" name="escalafon" id="escalafon" class="form-control"
                                                    value="{{old('escalafon', $data->escalafon ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="identidad" class="col-form-label requerido">Identidad</label>
                                            <div>
                                                <input type="text" name="identidad" id="identidad" class="form-control"
                                                    value="{{old('identidad', $data->identidad ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="nombre" class="col-form-label requerido">Nombre</label>
                                            <div>
                                                <input type="text" name="nombre" id="nombre" class="form-control"
                                                    value="{{old('nombre', $data->nombre ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="lnacimiento" class="col-form-label requerido">Lugar de
                                                Nacimiento</label>
                                            <div>
                                                <input type="text" name="lnacimiento" id="lnacimiento"
                                                    class="form-control"
                                                    value="{{old('lnacimiento', $data->lnacimiento ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="fnacimiento" class="col-form-label requerido">Fecha de
                                                Nacimiento</label>
                                            <div>
                                                <input type="date" name="fnacimiento" id="fnacimiento"
                                                    class="form-control"
                                                    value="{{old('fnacimiento', $data->fnacimiento ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email" class="col-form-label requerido">E-Mail</label>
                                            <div>
                                                <input type="email" name="email" id="email" class="form-control"
                                                    value="{{old('email', $data->email ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="celular" class="col-form-label requerido">Celular</label>
                                            <div>
                                                <input type="text" name="celular" id="celular" class="form-control"
                                                    value="{{old('celular', $data->celular ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Situación Laboral</label>
                                            <select name="slaboral" class="form-control" required>
                                                <option value="">Seleccione Situación</option>
                                                <option value="1">Permanente</option>
                                                <option value="2">Interino</option>
                                                <option value="3">Jubilado / Pensionado</option>
                                                <option value="4">desempleado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cotiza por:</label>
                                            <select name="cotiza" class="form-control" required>
                                                <option value="">Seleccione fuente </option>
                                                <option value="1">Escalafon</option>
                                                <option value="2">INPREMA</option>
                                                <option value="3">Cooperativa COMASOL</option>
                                                <option value="4">Ventanilla</option>
                                                <option value="5">No Aplica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="banco" class="col-form-label requerido">Banco</label>
                                            <div>
                                                <input type="text" name="banco" id="banco" class="form-control"
                                                    value="{{old('banco', $data->banco ?? '')}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="cuenta" class="col-form-label requerido">Cuenta</label>
                                            <div>
                                                <input type="text" name="cuenta" id="cuenta" class="form-control"
                                                    value="{{old('cuenta', $data->cuenta ?? '')}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="departamento"
                                                class="col-form-label requerido">Departamento</label>
                                            <div>
                                                <input type="text" name="departamento" id="departamento"
                                                    class="form-control"
                                                    value="{{old('departamento', $data->departamento ?? '')}}"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="municipio" class="col-form-label requerido">Municipio</label>
                                            <div>
                                                <input type="text" name="municipio" id="municipio" class="form-control"
                                                    value="{{old('municipio', $data->municipio ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="titulo" class="col-form-label requerido">Título</label>
                                            <div>
                                                <input type="text" name="titulo" id="titulo" class="form-control"
                                                    value="{{old('titulo', $data->titulo ?? '')}}" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="centro" class="col-form-label requerido">1.- Centro
                                                Educativo</label>
                                            <div>
                                                <input type="text" name="centro" id="centro" class="form-control"
                                                    value="{{old('centro', $data->centro ?? '')}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Administración</label>
                                            <select name="admon" class="form-control">
                                                <option value="">Seleccione la Administración</option>
                                                <option value="1">Gubernamental</option>
                                                <option value="2">No-Gubernamental</option>
                                                <option value="3">No Aplica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="lugar" class="col-form-label requerido">1.-
                                                Lugar</label>
                                            <div>
                                                <input type="text" name="lugar" id="lugar" class="form-control"
                                                    value="{{old('lugar', $data->lugar ?? '')}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="centrod" class="col-form-label requerido">2.- Centro
                                                Educativo</label>
                                            <div>
                                                <input type="text" name="centrod" id="centrod" class="form-control"
                                                    value="{{old('centrod', $data->centrod ?? '')}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Administración</label>
                                            <select name="admond" class="form-control">
                                                <option value="">Seleccione la Administración</option>
                                                <option value="1">Gubernamental</option>
                                                <option value="2">No-Gubernamental</option>
                                                <option value="3">No Aplica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="lugard" class="col-form-label requerido">2.-
                                                Lugar</label>
                                            <div>
                                                <input type="text" name="lugard" id="lugard" class="form-control"
                                                    value="{{old('lugard', $data->lugard ?? '')}}" />
                                            </div>
                                        </div>
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
