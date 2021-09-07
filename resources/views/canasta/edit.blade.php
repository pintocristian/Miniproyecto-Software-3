@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR CANASTA</h2>

<form action="{{route('canasta.update',$canasta->id)}}" method="POST">
   
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$canasta->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="imagen" name="imagen" type="text" class="form-control" tabindex="2" value="{{$canasta->imagen}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$canasta->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3" value="{{$canasta->precio}}">
  </div>
  <a href="/canasta" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
