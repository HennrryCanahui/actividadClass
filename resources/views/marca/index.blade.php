@extends('layouts.app')
@section('navbar-extra')
    <a href="/" class="btn btn-outline-primary d-inline-flex align-items-center">
        <i class="bi bi-arrow-left-square-fill me-2"></i> Inicio
    </a>
@endsection

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de Marcas</h1>

    <a href="{{ route('marca.create') }}" class="btn btn-primary mb-3">Agregar Marca</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marcas as $marca)
            <tr>
                <td>{{ $marca->id }}</td>
                <td>{{ $marca->descripcion }}</td>
                <td>{{ $marca->created_at }}</td>
                <td>{{ $marca->updated_at }}</td>
                <td>
                    <a href="{{ route('marca.show', $marca) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('marca.edit', $marca) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('marca.destroy', $marca) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Eliminar esta marca?')" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $marcas->links() }}
</div>
@endsection
