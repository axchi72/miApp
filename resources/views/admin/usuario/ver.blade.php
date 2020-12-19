<div class="card card-widget widget-user">
    <div class="widget-user-header bg-info">
        <h3 class="widget-user-username">{{$usuario->nombre}}</h3>
        <h5 class="widget-user-desc">{{$usuario->email}}</h5>
      </div>
    <div class="widget-user-image">
        <img class="img-circle elevation-2" src="{{Storage::url("img/usuarios/$usuario->foto")}}" alt="Foto del Usuario">
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">Usuario</h5>
                <span class="description-text">{{$usuario->usuario}}</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">Perfil</h5>
                <span class="description-text">

              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">Celular</h5>
                <span class="description-text">{{$usuario->celular}}</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
          </div>
    </div>
</div>

