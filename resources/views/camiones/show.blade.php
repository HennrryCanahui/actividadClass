@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Camión</h1>

    <p><strong>Placa:</strong> {{ $camion->placa }}</p>
    <p><strong>Código Interno:</strong> {{ $camion->codigo_interno }}</p>
    <p><strong>Color:</strong> {{ $camion->color }}</p>
    <p><strong>Modelo:</strong> {{ $camion->modelo }}</p>
    <p><strong>Capacidad (ton):</strong> {{ $camion->capacidad_toneladas }}</p>
    <p><strong>ID Marca:</strong> {{ $camion->id_marca }}</p>

    <a href="{{ route('camiones.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
