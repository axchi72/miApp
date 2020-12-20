<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido">Nombre</label>
    <div class="col-lg-10">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="departamento_id" class="col-lg-2 control-label {{!isset($data) ? 'requerido' : '' }}">Departamento</label>
    <div class="col-lg-10">
        <select name="departamento_id" id="departamento_id" class="form-control" required>
            <option value="">Seleccione el Departamento</option>
            @foreach ($departamentos as $id => $nombre)
            <option value="{{$id}}" {{old("departamento_id", $data->departamento['id'] ?? "") == $id ? "selected" : ""}}>
                {{$nombre}}
            </option>
            @endforeach
        </select>
    </div>
</div>
