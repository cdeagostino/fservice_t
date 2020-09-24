@extends('layouts.app')

@section('content')

{{'Ingreso de Nuevo Producto'}} 
    
@endsection

@section('content1') 

{!! Form::open(['route' => 'productos.store','files' => 'true', 'method' => 'POST'])  !!}

@include('productos.form')

<td><button class="btn btn-primary" type='submit'>Agregar Producto</button></td>
                        </thead>
                     </table>

{!! Form::close()  !!}
    
@endsection