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
                <h1>Perfil de Afiliado</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('afiliado') }}">Sistema de Afiliados</a></li>
                    <li class="breadcrumb-item active">Mostrar Afiliados</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{Storage::url("img/afiliados/$data->foto")}}"
                       alt="Foto de perfil del afiliado">
                </div>

                <h3 class="profile-username text-center">{{$data->nombre}} {{$data->apellido}}</h3>

                <p class="text-muted text-center">{{$data->id}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Identidad</b> <a class="float-right">{{ $data->identidad}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Afiliado desde</b> <a class="float-right">{{ $data->f_afiliacion}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Lugar de Nacimiento</b> <a class="float-right">{{ $data->lnac}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Fecha de Nacimiento</b> <a class="float-right">{{ $data->fnac}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Genero</b>
                        @if ($data->genero == 1)
                          <a class="float-right">Femenino</a>
                        @else
                          <a class="float-right">Masculino</a>
                        @endif

                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informacion </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Título</strong>

                <p class="text-muted">
                  {{ $data->titulo}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> {{ $data->departamento->nombre}}</strong>

                <p class="text-muted">{{ $data->municipio->nombre}}</p>
                <p class="text-muted">{{ $data->centro}}</p>
                @if ($data->centrod)
                <p class="text-muted">{{ $data->centrod}}</p>
                @endif

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Banco</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Banco: {{ $data->banco->nombre}}</span><br />
                  <span class="tag tag-success">Cuenta: {{ $data->cuenta}}</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Contacto</strong>

                <p class="text-muted">Celular: {{ $data->celular}} <br />Correo Electronico: {{ $data->email}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#deduccion" data-toggle="tab">Deducciones</a></li>
                  <li class="nav-item"><a class="nav-link" href="#otros" data-toggle="tab">Otros</a></li>
                  <li class="nav-item"><a class="nav-link" href="#recibos" data-toggle="tab">Recibos</a></li>
                  <li class="nav-item"><a class="nav-link" href="#registro" data-toggle="tab">Registro de Cambios</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="deduccion">
                      <a class="btn btn-danger" href="{{route('afiliado_pdf', $data->id)}}"><i class="far fa-file-pdf"></i></a>
                      <a class="btn btn-success" href="{{route('afiliado_excel', $data->id)}}"><i class="far fa-file-excel"></i></a>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>Deducción</td>
                                <td>Cotización</td>
                                <td>Cantidad</td>
                                <td>Detalle</td>
                                <td>Mes</td>
                                <td>Año</td>

                            </tr>
                        </thead>
                        @foreach ($data->deduccions as $deduc)
                        <tr>
                            <td>{{$deduc->cuenta->nombre}}</td>
                            <td>{{$deduc->cotiza_id}}</td>
                            <td>{{$deduc->cantidad}}</td>
                            <td>{{$deduc->detalle}}</td>
                            <td>{{$deduc->mes}}</td>
                            <td>{{$deduc->anio}}</td>




                        </tr>
                        @endforeach
                    </table>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="otros">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="recibos">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="registro">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
