<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido">Nombre</label>
    <div class="col-lg-10">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required />
    </div>
</div>

<div class="form-group row">
    <div class="form-check col-lg-3">
        <input class="form-check-input" type="checkbox" name="jubilados">
        <label class="form-check-label">Jubilados</label>
    </div>
    <div class="form-check col-lg-3">
        <input class="form-check-input" type="checkbox" name="bank_main">
        <label class="form-check-label">Banco Principal</label>
    </div>
    <div class="form-check col-lg-3">
        <input class="form-check-input" type="checkbox" name="alternate">
        <label class="form-check-label">Alternativo</label>
    </div>
    <div class="form-check col-lg-3">
        <input class="form-check-input" type="checkbox" name="normal">
        <label class="form-check-label">Normal</label>
    </div>
</div>
<div class="form-group row">
    <label for="ordering" class="col-lg-2 col-form-label requerido">Orden</label>
    <div class="col-lg-10">
        <input type="text" name="ordering" id="ordering" class="form-control" value="{{old('ordering', $data->ordering ?? '')}}" required />
    </div>
</div>
<div class="form-group row">
    <label for="generator" class="col-lg-2 col-form-label requerido">Generador</label>
    <div class="col-lg-10">
        <input type="text" name="generator" id="generator" class="form-control" value="{{old('generator', $data->generator ?? '')}}" required />
    </div>
</div>
