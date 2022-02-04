@extends('adminlte::page')

@section('title', 'Cargos')
@section('content_header')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)

@section('content')



<div class="row">
	<div class="col-6 mx-auto">
	
<form action="{{ url('/cargo')}}" method="post">
	@csrf
<div class="card mt-4">
  <div class="card-header bg-info text-white">
 		<h4 class="text-center">Crear un Cargo</h4>
  </div>
  <div class="card-body">
		

		<div class="form-group">
			<label for="descripcion" class="control-label">Descripción</label>
			<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del producto" tabindex="1" value="{{ old('descripcion') }}" >
	

	  </div>                    


		<div class="form-group"> 
			<label for="salario" class="control-label">Salario</label>
			<input type="numbre" step="any" value="00" class="form-control" id="salario" name="salario" placeholder="Salario" tabindex="2" 
				   value="{{ old('salario') }}">
		</div> 
	  
	  
		<div class="form-group"> 
		   @if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
	    </div> 
	  
	 
            
  </div> 
  <div class="card-footer text-center">
    	<a href="/cargo" class="btn btn-sm btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-sm btn-success">Guardar</button>
  </div>
</form>
</div>

</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop

