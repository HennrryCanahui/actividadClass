@extends('layouts.app')

@section('content')


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Razon social</th>
            <th>Creado</th>
            <th>Actualizado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transportes as $transporte)
        <tr>
            <td>{{ $transporte->id }}</td>
            <td>{{ $transporte->codigo }}</td>
            <td>{{ $transporte->nombre }}</td>
            <td>{{ $transporte->razon_social }}</td>
            <td>{{ $transporte->created_at }}</td>
            <td>{{ $transporte->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection