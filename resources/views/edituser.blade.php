@extends('layouts.app')

@section('content')

{{'Editar Usuario '.$idusers->name}} 
    
@endsection

@section('content1') 

{!! Form::model($idusers, [
    'route' => ['user.update', $idusers->id, 'method' => 'PUT']
]) !!}

@csrf               
              <table class="table" id="empresas">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <td>{{ $idusers->id }}</td>
                        </tr>
                        <tr>
                          <th scope="col">NOMBRE Y APELLIDO</th>
                          <td><input class="form-control" name="name" type="text" placeholder="Nombre y Apellido" value="{{ $idusers->name}}"></td>
                        </tr>
                          <tr>
                          <th scope="col">EMAIL</th>
                          <td><input class="form-control" name="email" type="text" placeholder="Email" value="{{ $idusers->email }}"></td>
                        </tr>
                        <td><button class="btn btn-primary" type='submit'>Actualizar</button></td>
                        <td><a class="btn btn-primary" href="{{ route('user.index') }}">Volver</a></td>
                        <input type="hidden" name="_method" value="PATCH">
                      </thead>
            </table>
            {!! Form::close()  !!}
    
@endsection