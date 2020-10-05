<div class="form-group row">
    <label for="identidad" class="col-lg-2 col-form-label requerido">Identidad</label>
    <div class="col-lg-10">
        <input type="text" name="identidad" id="identidad" class="form-control" value="{{old('identidad', $data->identidad ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido">Nombre</label>
    <div class="col-lg-10">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="foto" class="col-lg-2 col-form-label requerido">Foto</label>
    <div class="col-lg-10">
        <input type="text" name="foto" id="foto" class="form-control" value="{{old('foto', $data->foto ?? '')}}" required />
    </div>
</div>
