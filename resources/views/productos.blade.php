@extends('layouts.app')

@section('content')

{{'Productos'}} 
<a href={{route('productos.create')}}  class="btn btn-outline-primary btn-sm float-right">Agregar</a>
<a href={{route('productosListadoExport')}}  class="btn btn-outline-success btn-sm float-right">Exportar</a>

@endsection

@section('content1')

<table class="table" id="empresas">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">DESCRIPCION</th>
                          <th scope="col">CANTIDAD</th>
                          <th scope="col">ALTA</th>
                          <th scope="col" colspan="2"></th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto['id'] }}</td>
                            <td>{{ strtoupper($producto['nombre']) }}</td>
                            <td>{{ $producto['descripcion'] }}</td>
                            <td>{{ $producto['cantidad'] }}</td>
                            <td>{{ date_format($producto['created_at'],'d/m/Y') }}</td>
                            <td width="150">
                            <a class="btn btn-group btn-sm btn-outline-success float-right" href="{{ route('productos.edit',$producto['id']) }}">Editar</a>
                            <a href="{{ route('confirm', $producto->id ) }}" class="btn btn-group btn-sm btn-outline-danger float-right"><i class="fa fa-trash-alt"></i> Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

@push('scripts')
    <script type="text/javascript">
    $(document).ready( function () {
      $('#empresas').DataTable();
    } );
    </script>
@endpush
 
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Esta seguro que desea eliminar {{$producto['nombre']}} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
  <script type="text/javascript">
    $(document).ready( function () {
      $('#servicios').DataTable();
    } );
  </script>
@endpush
