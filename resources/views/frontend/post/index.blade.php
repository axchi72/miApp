@extends("theme.$theme.layout")

@section('titulo')
Publicaciones
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/frontend/post/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Publicaciones</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active">Publicaciones</li>
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
                @csrf
                @include('includes.mensaje')
                <!-- Default box -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Mantenimiento de registros</h3>

                        <div class="card-tools">
                            <a href="{{ route('crear.post') }}" class="btn btn-block btn-outline-primary">
                                <i class="fas fa-pen-alt"></i> Nuevo registro
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="tabla-data" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="width30">ID</th>
                                    <th>Creado</th>
                                    <th>Título</th>
                                    <th>Contenido</th>
                                    <th>Imágen</th>
                                    <th>Creado por</th>
                                    <th class="width80"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>{{ $data->titulo }}</td>
                                    <td>{{ getShorterString($data->contenido, 100)}}</td>
                                    <td>
                                        <img src="{{Storage::url("img/posts/$data->foto")}}" width="50px">
                                    </td>
                                    <td>{{ $data->user->usuario}}</td>
                                    <td>
                                        <a href="{{route('editar.post', ['id' => $data->id])}}"
                                            class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('eliminar.post', ['id' => $data->id])}}"
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
                        Listado de publicaciones
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
