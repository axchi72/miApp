<div class="card card-widget widget-user">
    <div class="widget-user-header bg-info">
        <h3 class="widget-user-username">{{$afiliado->first_name}} {{$afiliado->last_name}}</h3>
        <h5 class="widget-user-desc">{{$afiliado->email}}</h5>
      </div>
    <div class="widget-user-image">
        <img class="img-circle elevation-2" src="{{Storage::url("img/afiliados/$afiliado->foto")}}" alt="Foto del Afiliado">
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">Afiliacion</h5>
                <span class="description-text">{{$afiliado->id}}</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">Identidad</h5>
                  <span class="description-text">{{$afiliado->card_id}}</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">Nombre</h5>
                  <span class="description-text">{{$afiliado->first_name}} {{$afiliado->last_name}}</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
        </div>
    </div>
</div>

