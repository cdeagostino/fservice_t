@extends('layouts.app')

@section('content')

{{'Ingreso de Nuevo Producto'}} 
    
@endsection

@section('content1') 

{!! Form::model($idproducto, [
    'route' => ['productos.update', $idproducto->id, 'method' => 'PATCH']
]) !!}

@include('productos.form')

<input type="hidden" name="_method" value="PATCH">
<td><button class="btn btn-primary" type='submit'>Actualizar Producto</button></td>
                        </thead>
                     </table>

{!! Form::close()  !!}
    
@endsection