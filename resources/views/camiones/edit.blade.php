@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Camión</h1>

    <form action="{{ route('camiones.update', $camion) }}" method="POST">
        @csrf
        @method('PUT')
        @include('camiones.form', ['camion' => $camion])
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('camiones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
