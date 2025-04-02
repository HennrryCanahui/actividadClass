@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Creado</th>
            <th>Actualizado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marcas as $marca)
        <tr>
            <td>{{ $marca->id }}</td>
            <td>{{ $marca->descripcion }}</td>
            <td>{{ $marca->created_at }}</td>
            <td>{{ $marca->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection