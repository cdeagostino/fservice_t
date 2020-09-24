@extends('layouts.app')

@section('content')

{{'Confirmar eliminacion del Producto'}} 
    
@endsection

@section('content1') 

<div class="container py-5">
	<h3>¿Deseas eliminar el registro de {{ $producto->nombre }} ? </h3>

<form method="post" action="{{ route('productos.destroy', $producto->id )}}">
	@method('DELETE')
	@csrf
	<button type="submit" class="redondo btn btn-danger">
		<i class="fas fa-trash-alt"></i> Eliminar
	</button>
	<a class="redondo btn btn-secondary" href="{{ route('productos.index') }}">
		<i class="fas fa-ban"></i> Cancelar
	</a>
</form>	

</div>
@endsection