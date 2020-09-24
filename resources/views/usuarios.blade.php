@extends('layouts.app')

@section('content')

{{'Usuarios' }} 
    
@endsection

@section('content1')

<table class="table" id="empresas">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NOMBRE Y APELLIDO</th>
                          <th scope="col">EMAIL</th>
                          <th scope="col">ALTA</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($users as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>{{ strtoupper($user['name']) }}</td>
                             <td>{{ $user['email'] }}</td>
                             <td>{{ date_format($user['created_at'],'d/m/Y') }}</td>
                             <td><a class="btn btn-info" href="{{ route('user.edit',$user['id']) }}">Editar</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

@endsection