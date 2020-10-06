<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
    <div class="col-lg-9">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-lg-3 col-form-label requerido">E-Mail</label>
    <div class="col-lg-9">
        <input type="email" name="email" id="email" class="form-control" value="{{old('email', $data->email ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="celular" class="col-lg-3 col-form-label requerido">Celular</label>
    <div class="col-lg-9">
        <input type="text" name="celular" id="celular" class="form-control" value="{{old('celular', $data->celular ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="usuario" class="col-lg-3 col-form-label requerido">Usuario</label>
    <div class="col-lg-9">
        <input type="text" name="usuario" id="usuario" class="form-control" value="{{old('usuario', $data->usuario ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-lg-3 col-form-label {{!isset($data) ? 'requerido' : '' }} ">Contraseña</label>
    <div class="col-lg-9">
        <input type="password" name="password" id="password" class="form-control" value=""
            {{!isset($data) ? 'required' : ''}} minlength="5" />
    </div>
</div>
<div class="form-group row">
    <label for="re_password" class="col-lg-3 col-form-label {{!isset($data) ? 'requerido' : '' }}">Repita
        Contraseña</label>
    <div class="col-lg-9">
        <input type="password" name="re_password" id="re_password" class="form-control"
            {{!isset($data) ? 'required' : ''}} minlength="5" />
    </div>
</div>
<div class="form-group row">
    <label for="rol_id" class="col-lg-3 control-label {{!isset($data) ? 'requerido' : '' }}">Rol</label>
    <div class="col-lg-9">
        <select name="rol_id[]" id="rol_id" class="form-control" multiple {{!isset($data) ? 'required' : ''}}>
            <option value="">Seleccione el Rol</option>
            @foreach ($rols as $id => $nombre)
            <option value="{{$id}}" {{is_array(old("rol_id")) ? (in_array($id, old('rol_id')) ? 'selected' : '') : (isset($data) ? ($data->roles->firstWhere('id',$id) ? 'selected' : '') : '')}}>
                {{$nombre}}
            </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="foto" class="col-lg-3 col-form-label">Foto</label>
    <div class="col-lg-5">
        <input type="file" name="foto_up" id="foto" data-initial-preview="{{isset($data->foto) ? Storage::url("img/usuarios/$data->foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Imagen+Usuario"}}" accept="image/*"/>
    </div>
</div>
