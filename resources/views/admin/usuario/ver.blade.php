<div>{{$usuario->nombre}}</div>
<div>{{$usuario->email}}</div>
<div>{{$usuario->celular}}</div>
<div>{{$usuario->usuario}}</div>
<div>
    <img src="{{Storage::url("img/usuarios/$usuario->foto")}}" alt="Foto del Usuario">
</div>
