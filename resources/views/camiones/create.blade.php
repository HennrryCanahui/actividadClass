@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Camión</h1>

    <form action="{{ route('camiones.store') }}" method="POST">
        @csrf
        @include('camiones.form')
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('camiones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
