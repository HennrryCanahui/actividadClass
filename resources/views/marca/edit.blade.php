@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Marca</h1>

    <form action="{{ route('marca.update', $marca) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <input type="text" name="descripcion" class="form-control" value="{{ $marca->descripcion }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('marca.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
