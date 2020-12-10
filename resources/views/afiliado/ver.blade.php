<div>{{$afiliado->nombre}}</div>
<div>{{$afiliado->email}}</div>
<div>{{$afiliado->celular}}</div>
<div>{{$afiliado->afiliacion}}</div>
<div>
    <img src="{{Storage::url("img/afiliados/$afiliado->foto")}}" alt="Foto del Afiliado">
</div>

