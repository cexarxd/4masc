<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>

    <label for="ubicacion" class="col-lg-3 control-label requerido">Ubicacion</label>
    <div class="col-lg-8">
    <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="{{old('ubicacion', $data->ubicacion ?? '')}}" required/>
    </div>
</div>