@extends("theme.$theme.layout")

@section('titulo')
Sistema de Bancos
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
          <h1>Bancos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Sistema de Bancos</li>
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
                    <a href="{{ route('crear_banco') }}" class="btn btn-block btn-outline-primary">
                        <i class="fas fa-pen-alt"></i> Nuevo registro
                    </a>
                </div>
                </div>
                <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mantenimiento de registros</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tabla-data" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Depositable</th>
                                <th>Asambleista</th>
                                <th>Analizador</th>
                                <th>Generador</th>
                                <th>Código</th>
                                <th>Cuenta</th>
                                <th>Cuota</th>
                                <th class="width70"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nombre }}</td>
                                <td>
                                    @if ($data->depositable == 1)
                                        <i class="fas fa-check"></i>
                                    @endif
                                </td>
                                <td>

                                </td>
                                <td>
                                    @if ($data->alternate == 1)
                                        <i class="fas fa-check"></i>
                                    @endif
                                </td>
                                <td>
                                    @if ($data->normal == 1)
                                        <i class="fas fa-check"></i>
                                    @endif
                                </td>
                                <td>{{ $data->ordering }}</td>
                                <td>{{ $data->generator }}</td>
                                <td text-align="center">
                                    <a href="{{route('editar_cotiza', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('eliminar_cotiza', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
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
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
                <!-- /.card-footer-->
            </div>
        <!-- /.card -->
        </div>
      </div>
  </section>
  <!-- /.content -->

@endsection


