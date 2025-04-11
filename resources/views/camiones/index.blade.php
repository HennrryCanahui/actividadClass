@extends('layouts.app')
@section('navbar-extra')
    <a href="/" class="btn btn-outline-primary d-inline-flex align-items-center">
        <i class="bi bi-arrow-left-square-fill me-2"></i> Inicio
    </a>
@endsection
@section('content')

<div class="container">
    <h1>Camiones</h1>

    <a href="{{ route('camiones.create') }}" class="btn btn-primary mb-3">Agregar Camión</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

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
                <th>Acciones</th>
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
                <td>
                    <a href="{{ route('camiones.show', $camion) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('camiones.edit', $camion) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('camiones.destroy', $camion) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este camión?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $camiones->links() }}
    </div>
</div>

@endsection
