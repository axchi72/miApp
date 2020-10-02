<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
        <input type="text" name="nombre" id="nombre" class="form-control"
            value="{{ old('nombre', $data->nombre ?? '') }}" required />
    </div>
</div>
<div class="form-group row">
    <label for="slug" class="col-sm-2 col-form-label requerido">Slug</label>
    <div class="col-sm-10">
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $data->slug ?? '') }}" required />
    </div>
</div>
