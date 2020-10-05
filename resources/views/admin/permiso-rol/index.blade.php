@extends("theme.$theme.layout")

@section('titulo')
Permiso - Rol
@endsection
@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/permiso-rol/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sistema Permiso - Rol</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Admin</a></li>
                    <li class="breadcrumb-item active">Permiso - Rol</li>
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
                        <h3 class="card-title">Mantenimiento de registros</h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        <table class="table table-bordered table-hover table-striped" id="tabla-data">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Permiso</th>
                                    @foreach ($rols as $id => $nombre)
                                    <th class="text-center">{{$nombre}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permisos as $key => $permiso)
                                <tr>
                                    <td>{{$permiso["id"]}}</td>
                                    <td class="font-weight-bold">{{$permiso["nombre"]}}</td>
                                    @foreach ($rols as $id => $nombre)
                                    <td class="text-center">
                                        <input type="checkbox" class="permiso_rol" name="permiso_rol[]"
                                            data-permisoid={{$permiso["id"]}} value="{{$id}}"
                                            {{in_array($id, array_column($permisosRols[$permiso["id"]], "id"))? "checked" : ""}} />
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

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
