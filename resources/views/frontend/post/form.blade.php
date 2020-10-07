<div class="form-group row">
    <label for="titulo" class="col-sm-2 col-form-label requerido">Titulo</label>
    <div class="col-sm-10">
        <input type="text" name="titulo" id="titulo" class="form-control"
            value="{{ old('titulo', $data->titulo ?? '') }}" required />
    </div>
</div>
<div class="form-group row">
    <label for="extracto" class="col-sm-2 col-form-label requerido">Extracto</label>
    <div class="col-sm-10">
        <input type="text" name="extracto" id="extracto" class="form-control"
            value="{{ old('extracto', $data->extracto ?? '') }}" required />
    </div>
</div>
<div class="form-group row">
    <label for="contenido" class="col-sm-2 col-form-label requerido">Contenido</label>
    <div class="col-sm-10">
        <textarea type="text" name="contenido" id="contenido" class="form-control" required />
            {{ old('contenido', $data->contenido ?? '') }}
        </textarea>

    </div>
</div>
<div class="form-group row">
    <label for="foto" class="col-lg-3 col-form-label">Foto</label>
    <div class="col-lg-5">
        <input type="file" name="foto_up" id="foto" data-initial-preview="{{isset($data->foto) ? Storage::url("img/posts/$data->foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Imagen+Publicación"}}" accept="image/*"/>
    </div>
</div>
