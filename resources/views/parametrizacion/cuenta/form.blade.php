<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido">Nombre</label>
    <div class="col-lg-6">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}"
            required />
    </div>
</div>
<div class="form-group row">
    <label for="prestamo" class="col-lg-2 col-form-label">Prestamo</label>
    <div class="col-lg-6">
        <select name="prestamo" class="form-control">
            <option value="">Seleccione</option>
            <option value="1" {{old("prestamo", $data->prestamo ?? "") == 1 ? "selected" : ""}}>Prestamo</option>
        </select>
    </div>
</div>
