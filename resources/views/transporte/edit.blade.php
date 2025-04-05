@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Transporte</h1>

    <form action="{{ route('transporte.update', $transporte) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control" value="{{ $transporte->codigo }}" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $transporte->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="razon_social" class="form-label">Razón Social</label>
            <input type="text" name="razon_social" class="form-control" value="{{ $transporte->razon_social }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('transporte.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
