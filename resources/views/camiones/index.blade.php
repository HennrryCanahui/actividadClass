@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Código Interno</th>
            <th>Color</th>
            <th>Modelo</th>
            <th>Capacidad (ton)</th>
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($camiones as $camion)
        <tr>
            <td>{{ $camion->id }}</td>
            <td>{{ $camion->placa }}</td>
            <td>{{ $camion->codigo_interno }}</td>
            <td>{{ $camion->color }}</td>
            <td>{{ $camion->modelo }}</td>
            <td>{{ $camion->capacidad_toneladas }}</td>
            <td>{{ $camion->id_marca }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Agregar paginación -->
<div class="d-flex justify-content-center">
    {{ $camiones->links() }}
</div>

@endsection