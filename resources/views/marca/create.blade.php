@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Marca</h1>

    <form action="{{ route('marca.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <input type="text" name="descripcion" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('marca.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
