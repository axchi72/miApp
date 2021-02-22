@extends("theme.$theme.layout")

@section('titulo')
Afiliado
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/frontend/afiliados/index.js")}}" type="text/javascript"></script>
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
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Sistema de Afiliados</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('includes.mensaje')
            <!-- Default box -->
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listado</h3>

                    <div class="card-tools">
                        <a href="{{ route('crear_afiliado') }}" class="btn btn-block btn-outline-primary">
                            <i class="fas fa-pen-alt"></i> Nuevo registro
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="card-title">Busqueda de Afiliados</h3>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <form action="{{ route('afiliado') }}" class="form-inline pull-right" method="GET"
                            autocomplete="off">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="No. de Afiliacion" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="identidad" class="form-control" placeholder="Identidad" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="apellido" class="form-control" placeholder="Apellido" />
                                </div>
                            </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <hr />
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Afiliacion</th>
                                <th>Identidad</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Estado</th>
                                <th class="width70"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->identidad }}</td>
                                <td>
                                    <a href="{{route('ver_afiliado', $data)}}" class="ver-afiliado">
                                        {{ $data->nombre }}
                                    </a>
                                </td>
                                <td>{{ $data->apellido }}</td>
                                <td>
                                    @if ($data->activo == 1)
                                    Activo
                                    @else
                                    Inactivo
                                    @endif
                                </td>
                                <td text-align="center">
                                    <a href="{{route('mostrar_afiliado', ['id' => $data->id])}}"
                                        class="btn-accion-tabla tooltipsC" title="Mostrar este registro">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('editar_afiliado', ['id' => $data->id])}}"
                                        class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('eliminar_afiliado', ['id' => $data->id])}}"
                                        class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC"
                                            title="Eliminar este registro">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $datas->render()}}
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Afiliados
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>

    <div class="modal fade" id="modal-ver-afiliado" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Afiliado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection
