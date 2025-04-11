@extends('layouts.app')
@section('navbar-extra')
    <a href="/" class="btn btn-outline-primary d-inline-flex align-items-center">
        <i class="bi bi-arrow-left-square-fill me-2"></i> Inicio
    </a>
@endsection

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Transportes</h1>

    <a href="{{ route('transporte.create') }}" class="btn btn-primary mb-3">Agregar Transporte</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Razón social</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transportes as $transporte)
            <tr>
                <td>{{ $transporte->id }}</td>
                <td>{{ $transporte->codigo }}</td>
                <td>{{ $transporte->nombre }}</td>
                <td>{{ $transporte->razon_social }}</td>
                <td>{{ $transporte->created_at }}</td>
                <td>{{ $transporte->updated_at }}</td>
                <td>
                    <a href="{{ route('transporte.show', $transporte) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('transporte.edit', $transporte) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('transporte.destroy', $transporte) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro?')" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $transportes->links() }}
</div>
@endsection
