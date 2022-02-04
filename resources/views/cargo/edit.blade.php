@extends('layouts.plantillabase');

@section('contenido')
<form action="/articulo/{{$articulo->id}}" method="post" enctype="multipart/form-data">
	@csrf
    @method('PUT')
<div class="card">
  <div class="card-header bg-info text-white">
 		<h3 class="text-center">Editar un Articulo</h3>
  </div>
  <div class="card-body">
		<div class="form-group"> <!-- Full Name -->
			<label for="codigo" class="control-label">Código</label>
			<input type="text"  value="{{$articulo->codigo}}" class="form-control" id="codigo" name="codigo" placeholder="Codigo" tabindex="1">
		</div>    

		<div class="form-group"> <!-- Street 1 -->
			<label for="descripcion" class="control-label">Descripción</label>
			<input type="text" value="{{$articulo->descripcion}}" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del producto" tabindex="1">
		</div>                    

		<div class="form-group"> <!-- Street 2 -->
			<label for="cantidad" class="control-label">Cantidad</label>
			<input type="number" value="{{$articulo->cantidad}}" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" tabindex="3">
		</div>    

		<div class="form-group"> <!-- City-->
			<label for="precio" class="control-label">Precio</label>
			<input type="numbre" value="{{$articulo->precio}}" step="any" value="0.00" class="form-control" id="precio" name="precio" placeholder="Precio" tabindex="4">
		</div>                                    
		<div class="form-group"> <!-- Zip Code-->
			<label for="foto" class="control-label">Foto</label>
			<input type="file" class="form-control" id="foto" name="foto" >
		</div>             
  </div> 
  <div class="card-footer text-center">
    	<a href="/articulo" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

@endsection



