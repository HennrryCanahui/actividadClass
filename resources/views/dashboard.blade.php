@extends('layouts.app')

@section('title', 'Pruebas cards')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center mt-5">

        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-truck fs-1 text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Información Camiones</h5>
                    <p class="card-text text-muted">Consulta la información de los camiones</p>
                    <a href="{{ route('camiones.index') }}" class="btn btn-outline-primary">Ver Camiones</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-cart-check fs-1 text-success"></i>
                    </div>
                    <h5 class="card-title fw-bold">Ventas</h5>
                    <p class="card-text text-muted">Registra nuevas ventas fácilmente</p>
                    <br>
                    <a href="{{ route('marca.index') }}" class="btn btn-outline-success">Ir a Ventas</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-box-seam fs-1 text-warning"></i>
                    </div>
                    <h5 class="card-title fw-bold">Inventario</h5>
                    <p class="card-text text-muted">Consulta el stock disponible</p>
                    <br>
                    <a href="{{ route('transporte.index') }}" class="btn btn-outline-warning">Ver Inventario</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
