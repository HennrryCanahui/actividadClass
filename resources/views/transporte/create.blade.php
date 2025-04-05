@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Transporte</h1>

    <form action="{{ route('transporte.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="razon_social" class="form-label">Razón Social</label>
            <input type="text" name="razon_social" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('transporte.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
