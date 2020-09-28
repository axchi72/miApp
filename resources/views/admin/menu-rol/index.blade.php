@extends("theme.$theme.layout")

@section('titulo')
    Menús - Rol
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu-rol/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sistema de Menú - Rol </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Sistema de Menú - Rol</li>
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
                    <a href="{{ route('crear_menu') }}" class="btn btn-block btn-outline-primary">
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
                        @csrf
                        <table class="table table-bordered table-hover table-striped" >
                            <thead>
                                <tr>
                                    <th>Menú</th>
                                    @foreach ($rols as $id => $nombre)
                                    <th>{{$nombre}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $key => $menu)
                                @if ($menu["menu_id"] != 0)
                                @break
                                @endif
                                <tr>
                                    <td class="font-weight-bold"><i class="fas fa-arrows-alt"></i> {{$menu["nombre"]}}
                                    </td>
                                    @foreach ($rols as $id => $nombre)
                                    <td class="text-center">
                                        <input
                                        type="checkbox"
                                        class="menu_rol"
                                        name="menu_rol[]"
                                        data-menuid={{$menu["id"]}}
                                        value="{{$id}}" {{in_array($id, array_column($menusRols[$menu["id"]], "id"))? "checked" : ""}} />
                                    </td>
                                    @endforeach
                                </tr>
                                @foreach ($menu["submenu"] as $key => $hijo)
                                <tr>
                                    <td class="pl-30"><i class="fas fa-arrow-right"></i> {{$hijo["nombre"]}}</td>
                                    @foreach ($rols as $id => $nombre)
                                    <td class="text-center">
                                        <input
                                        type="checkbox"
                                        class="menu_rol"
                                        name="menu_rol[]"
                                        data-menuid={{$hijo["id"]}}
                                        value="{{$id}}" {{in_array($id, array_column($menusRols[$hijo["id"]], "id"))? "checked" : ""}} />
                                    </td>
                                    @endforeach
                                </tr>
                                @foreach ($hijo["submenu"] as $key => $hijo2)
                                <tr>
                                    <td class="pl-40"><i class="fas fa-arrow-right"></i> {{$hijo2["nombre"]}}</td>
                                    @foreach ($rols as $id => $nombre)
                                    <td class="text-center">
                                        <input
                                        type="checkbox"
                                        class="menu_rol"
                                        name="menu_rol[]"
                                        data-menuid={{$hijo2["id"]}}
                                        value="{{$id}}" {{in_array($id, array_column($menusRols[$hijo2["id"]], "id"))? "checked" : ""}} />
                                    </td>
                                    @endforeach
                                </tr>
                                @foreach ($hijo2["submenu"] as $key => $hijo3)
                                <tr>
                                    <td class="pl-50"><i class="fas fa-arrow-right"></i> {{$hijo3["nombre"]}}</td>
                                    @foreach ($rols as $id => $nombre)
                                    <td class="text-center">
                                        <input
                                        type="checkbox"
                                        class="menu_rol"
                                        name="menu_rol[]"
                                        data-menuid={{$hijo3["id"]}}
                                        value="{{$id}}" {{in_array($id, array_column($menusRols[$hijo3["id"]], "id"))? "checked" : ""}} />
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Menús - Rol
                </div>
                <!-- /.card-footer-->
            </div>
        <!-- /.card -->
        </div>
      </div>
  </section>
  <!-- /.content -->

@endsection


