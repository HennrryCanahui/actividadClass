@extends('layouts.app')

@section('navbar-extra')
    <a href="/" class="btn btn-outline-primary d-inline-flex align-items-center">
        <i class="bi bi-arrow-left-square-fill me-2"></i> Inicio
    </a>
@endsection

@section('content')
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            margin-top: 100px;
        }
    </style>


    <div class="centered">
        <img src="{{ asset('img/proximamente.png') }}" alt="">.png
    </div>
@endsection