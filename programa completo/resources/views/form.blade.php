{{-- Formulario que tendra datos en comun con create y edit --}}

<h1>{{$modo}} dulce</h1>

@if (count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
    @foreach ($errors->all() as $error)

    <li>{{$error}}</li>

    @endforeach
    </ul>
</div>


@endif

<div class="form-group">
<label for="NombreDelDulce">nombre del dulce</label>
<input type="text" class="form-control" name="NombreDelDulce" value="{{isset($dulce->NombreDelDulce)?$dulce->NombreDelDulce:''}}" id="NombreDelDulce">
</div>

<div class="form-group">
<label for="marca">Marca del dulce</label>
<input type="text" class="form-control" name="marca" value="{{isset($dulce->marca)?$dulce->marca:''}}" id="marca">
</div>

<div class="form-group">
<label for="precio">Precio</label>
<input type="text" class="form-control" name="precio" value="{{isset($dulce->precio)?$dulce->precio:''}}"  id="precio">
</div>

<div class="form-group">
<label for="cantidad">Cantidad</label>
<input type="text" class="form-control" name="cantidad" value="{{isset($dulce->cantidad)?$dulce->cantidad:''}}"  id="cantidad">
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href="{{url('dulce')}}">Regresar</a>

<br>
