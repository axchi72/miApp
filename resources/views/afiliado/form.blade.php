<div class="form-group row">
    <label for="foto" class="col-lg-3 col-form-label">Foto</label>
    <div class="col-lg-5">
        <input type="file" name="foto_up" id="foto"
            data-initial-preview="{{isset($data->foto) ? Storage::url("img/afiliados/$data->foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Imagen+Afiliado"}}"
            accept="image/*" />
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="form-group">
            <label for="id" class="col-form-label requerido">Afiliación</label>
            <div>
                <input type="text" name="id" id="id" class="form-control" value="{{old('id', $data->id ?? '')}}"
                    required />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="identidad" class="col-form-label requerido">Identidad</label>
            <div>
                <input type="text" name="identidad" id="identidad" class="form-control"
                    value="{{old('identidad', $data->identidad ?? '')}}" required />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="escalafon" class="col-form-label requerido">Escalafón</label>
            <div>
                <input type="text" name="escalafon" id="escalafon" class="form-control"
                    value="{{old('escalafon', $data->escalafon ?? '')}}" />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="inprema" class="col-form-label requerido">INPREMA</label>
            <div>
                <input type="text" name="inprema" id="inprema" class="form-control"
                    value="{{old('inprema', $data->inprema ?? '')}}" />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="form-group">
            <label for="nombre" class="col-form-label requerido">Nombre</label>
            <div>
                <input type="text" name="nombre" id="nombre" class="form-control"
                    value="{{old('nombre', $data->nombre ?? '')}}" required />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="apellido" class="col-form-label requerido">Apellido</label>
            <div>
                <input type="text" name="apellido" id="apellido" class="form-control"
                    value="{{old('apellido', $data->apellido ?? '')}}" required />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="lnac" class="col-form-label requerido">Lugar de
                Nacimiento</label>
            <div>
                <input type="text" name="lnac" id="lnac" class="form-control" value="{{old('lnac', $data->lnac ?? '')}}"
                    required />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="fnac" class="col-form-label requerido">Fecha de
                Nacimiento</label>
            <div>
                <input type="date" name="fnac" id="fnac" class="form-control" value="{{old('fnac', $data->fnac ?? '')}}"
                    required />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="form-group">
            <label for="genero" class="col-form-label requerido">Genero</label>
            <select name="genero" id="genero" class="form-control" required>
                <option value="">Seleccione</option>
                <option value="1" {{old("genero", $data->genero ?? "") == 1 ? "selected" : ""}}>Femenino</option>
                <option value="2" {{old("genero", $data->genero ?? "") == 2 ? "selected" : ""}}>Masculino</option>
            </select>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="email" class="col-form-label requerido">E-Mail</label>
            <div>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{old('email', $data->email ?? '')}}" required />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="celular" class="col-form-label requerido">Celular</label>
            <div>
                <input type="text" name="celular" id="celular" class="form-control"
                    value="{{old('celular', $data->celular ?? '')}}" required />
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="slaboral_id" class="control-label {{!isset($data) ? 'requerido' : '' }}">Situación
                laboral</label>
            <select name="slaboral_id" id="slaboral_id" class="form-control" required>
                <option value="">Seleccione Situación laboral</option>
                @foreach ($slaborals as $id => $nombre)
                <option value="{{$id}}" {{old("slaboral_id", $data->slaboral['id'] ?? "") == $id ? "selected" : ""}}>
                    {{$nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="direccion" class="col-form-label requerido">Dirección</label>
            <div>
                <textarea name="direccion" id="direccion" class="form-control" rows="3" placeholder="Enter ..." required>{{old('direccion', $data->direccion ?? '')}}</textarea>

            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="fnac" class="col-form-label requerido">Afiliado desde</label>
            <div>
                <input type="date" name="f_afiliacion" id="f_afiliacion" class="form-control"
                    value="{{old('f_afiliacion', $data->f_afiliacion ?? '')}}" required />
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="estado" class="col-form-label requerido">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="">Seleccione</option>
                <option value="1" {{old("estado", $data->estado ?? "") == 1 ? "selected" : ""}}>Activo</option>
                <option value="2" {{old("estado", $data->estado ?? "") == 2 ? "selected" : ""}}>Inactivo</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="cotiza_id" class="control-label {{!isset($data) ? 'requerido' : '' }}">Cotizacion</label>
            <select name="cotiza_id" id="cotiza_id" class="form-control" required>
                <option value="">Cotiza por:</option>
                @foreach ($cotizas as $id => $nombre)
                <option value="{{$id}}" {{old("cotiza_id", $data->cotiza_id ?? "") == $id ? "selected" : ""}}>
                    {{$nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="banco_id" class="control-label {{!isset($data) ? 'requerido' : '' }}">Banco</label>
            <select name="banco_id" id="banco_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach ($bancos as $id => $nombre)
                <option value="{{$id}}" {{old("banco_id", $data->banco_id ?? "") == $id ? "selected" : ""}}>
                    {{$nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="cuenta" class="col-form-label requerido">Cuenta</label>
            <div>
                <input type="text" name="cuenta" id="cuenta" class="form-control"
                    value="{{old('cuenta', $data->cuenta ?? '')}}" />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="departamento_id"
                class="control-label {{!isset($data) ? 'requerido' : '' }}">Departamento</label>
            <select name="departamento_id" id="departamento_id" class="form-control" required>
                <option value="">Selecciona tu Departamento</option>
                @foreach ($departamentos as $id => $nombre)
                <option value="{{$id}}"
                    {{old("departamento_id", $data->departamento_id['id'] ?? "") == $id ? "selected" : ""}}>
                    {{$nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="municipio_id" class="control-label {{!isset($data) ? 'requerido' : '' }}">Municipio</label>
            <select name="municipio_id" id="municipio_id" class="form-control" />
            <option>Selecciona tu Municipio</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="titulo" class="col-form-label requerido">Título</label>
            <div>
                <textarea name="titulo" id="titulo" class="form-control" rows="3" required>{{old('titulo', $data->titulo ?? '')}}</textarea>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="centro" class="col-form-label requerido">1.- Centro
                Educativo</label>
            <div>
                <input type="text" name="centro" id="centro" class="form-control"
                    value="{{old('centro', $data->centro ?? '')}}" />
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label>Administración</label>
            <select name="admon" class="form-control">
                <option value="">Seleccione la Administración</option>
                <option value="1" {{old("admon", $data->admon ?? "") == 1 ? "selected" : ""}}>Gubernamental</option>
                <option value="2" {{old("admon", $data->admon ?? "") == 2 ? "selected" : ""}}>No-Gubernamental</option>
                <option value="3" {{old("admon", $data->admon ?? "") == 3 ? "selected" : ""}}>No Aplica</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="lugar" class="col-form-label">1.-
                Lugar</label>
            <div>
                <input type="text" name="lugar" id="lugar" class="form-control"
                    value="{{old('lugar', $data->lugar ?? '')}}" />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="centrod" class="col-form-label">2.- Centro
                Educativo</label>
            <div>
                <input type="text" name="centrod" id="centrod" class="form-control"
                    value="{{old('centrod', $data->centrod ?? '')}}" />
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label>Administración</label>
            <select name="admond" class="form-control">
                <option value="">Seleccione la Administración</option>
                <option value="1" {{old("admond", $data->admond ?? "") == 1 ? "selected" : ""}}>Gubernamental</option>
                <option value="2" {{old("admond", $data->admond ?? "") == 2 ? "selected" : ""}}>No-Gubernamental</option>
                <option value="3" {{old("admond", $data->admond ?? "") == 3 ? "selected" : ""}}>No Aplica</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="lugard" class="col-form-label">2.-
                Lugar</label>
            <div>
                <input type="text" name="lugard" id="lugard" class="form-control"
                    value="{{old('lugard', $data->lugard ?? '')}}" />
            </div>
        </div>
    </div>
</div>
</div>
