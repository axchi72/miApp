@extends("theme.$theme.layout")

@section('titulo')
Sistema Usuario
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sistema de usuario</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
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
                        <h3 class="card-title">Mantenimiento de registros</h3>

                        <div class="card-tools">
                            <a href="{{ route('crear_usuario') }}" class="btn btn-block btn-outline-primary">
                                <i class="fas fa-pen-alt"></i> Nuevo registro
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover" id="tabla-data">
                            <thead>
                                <tr>
                                    <th class="width30">ID</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>E-Mail</th>
                                    <th>Celular</th>
                                    <th>Roles</th>
                                    <th class="width80"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->usuario }}</td>
                                    <td>{{ $data->nombre }}</td>
                                    <td>{{ $data->correo }}</td>
                                    <td>{{ $data->celular }}</td>
                                    <td>
                                        @foreach ($data->roles as $rol)
                                            {{$loop->last ? $rol->nombre : $rol->nombre . ', '}}
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{route('editar_usuario', ['id' => $data->id])}}"
                                            class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('eliminar_usuario', ['id' => $data->id])}}"
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
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Listado de Usuarios
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
