@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Marca</h1>

    <p><strong>ID:</strong> {{ $marca->id }}</p>
    <p><strong>Descripción:</strong> {{ $marca->descripcion }}</p>
    <p><strong>Creado:</strong> {{ $marca->created_at }}</p>
    <p><strong>Actualizado:</strong> {{ $marca->updated_at }}</p>

    <a href="{{ route('marca.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
