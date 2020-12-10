@extends("theme.$theme.template")

@section('titulo')
Inicio
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 class="m-0 text-dark">Servicios a nuestros afiliados<small>COPEMH</small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                    <li class="breadcrumb-item active">Servicios </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Servicios Al Afiliado</h5>
                        <p class="card-text">
                            Diversos servicios que se prestan al afiliado como Préstamos, Ayudas Funebres y Otros,
                            Cuentas para efectuar tu depósito de pago de colegiación y de préstamo personal en las
                            diversas agencias de las instituciones bancarias del país.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Planificaciones</h5>
                        <p class="card-text">
                            Aquí encontrará los diversos planes de clases para distintas materias que han sido
                            contribuidos por nuestros afiliados en todo el país.
                        </p>
                    </div>
                </div><!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Formularios</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Ver</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($datas as $data)
                                      <tr>
                                        <td>{{ $data->nombre}}</td>
                                            <td>
                                                <a href="{{Storage::url("img/documentos/$data->enlace")}}">
                                                    <i class="fas fa-file-pdf text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
