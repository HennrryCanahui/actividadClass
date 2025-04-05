@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Transporte</h1>

    <div class="mb-3">
        <strong>Código:</strong> {{ $transporte->codigo }}
    </div>

    <div class="mb-3">
        <strong>Nombre:</strong> {{ $transporte->nombre }}
    </div>

    <div class="mb-3">
        <strong>Razón Social:</strong> {{ $transporte->razon_social }}
    </div>

    <div class="mb-3">
        <strong>Creado:</strong> {{ $transporte->created_at }}
    </div>

    <div class="mb-3">
        <strong>Actualizado:</strong> {{ $transporte->updated_at }}
    </div>

    <a href="{{ route('transporte.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
