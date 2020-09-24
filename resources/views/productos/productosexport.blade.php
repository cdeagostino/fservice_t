<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Observaciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td>{{ $producto->observaciones }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

