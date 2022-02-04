@extends('adminlte::page')

@section('title', 'Cargos')
@section('content_header')
@section('plugins.Datatables', true)


@section('content')




<br>
<div class="card">
	<div class="card-header bg-light">
		<a href="cargo/create" class="btn btn-sm btn-success  float-right">Crear un Cargo</a>
 <h3 class="text-center">Lista de Cargos</h3> 
	</div>
	<div class="card-body">
	  <table class="table table-striped table-striped table-hover table-dark mt-3" id="example">
  <thead>
    <tr class="text-center">
	  <th >Id</th>
      <th>Descripón</th>
      <th>Salario</th>
	  <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
	@foreach($cargos as $cargo)
    <tr>
      <th class="text-center"> {{ $cargo->id}}</th>
	  <th> {{ $cargo->descripcion}}</th>
      <td class="text-right"> {{ $cargo->salario}}</td>
      <td class="text-center">
        <form action="{{ url('/cargo/'.$cargo->id)}}" method="post" class="formElim"> 
          @csrf
          {{ method_field('DELETE')}}
			    <a href="/cargo/edit" class="btn btn-sm btn-info">Editar</a>
		  	  <button class="btn btn-sm btn-danger">Borrar</button>
		  </form>
	  </td>
      
    </tr>
  @endforeach
  </tbody>
</table>
	
	
	
	</div>
</div>


		
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@if (session('eliminar')=='ok')
	<script>
		Swal.fire(
			  'Eliminado!!',
			  'El registro ha sido eliminado. ',
			  'success'
			)
	</script>

@endif


<script> 
		$(document).ready(function() {
    		$('#example').DataTable( {
				
        		dom: 'Bfrtip',
        		buttons: [
            		'csv', 'excel', 'pdf',
        		],
				
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			});
		});
		
		
	</script> 

<script type="text/javascript">
	$('.formElim').submit(function(e){
		e.preventDefault();

		Swal.fire({
		  title: '¿Estas Seguro?',
		  text: "¡No podrás revertir esto!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si lo quiero eliminar!',
		  cancelButtonText: 'Cancelar'
		}).then((result) => {
		  if (result.isConfirmed) {
			
			  this.submit();
		  }
		})	
	})
   
</script>
		



@stop