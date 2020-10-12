<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
        <input type="text" name="nombre" id="nombre" class="form-control"
            value="{{ old('nombre', $data->nombre ?? '') }}" required />
    </div>
</div>
<div class="form-group row">
    <label for="foto" class="col-lg-3 col-form-label">Documento</label>
    <div class="col-lg-5">
        <input type="file" name="enlace_up" id="foto" data-initial-preview="{{isset($data->enlace) ? Storage::url("img/documento/$data->enlace") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Documento+PDF"}}" accept="application/pdf"/>
    </div>
</div>
