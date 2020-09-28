<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido">Nombre</label>
    <div class="col-lg-10">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required />
    </div>
</div>
<input type="hidden" name="creo" value="1" />
