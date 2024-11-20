
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <img src="{{ asset('images/fullsys_logo.png') }}" alt="Fullsys Logo" style="max-width: 200px; margin-bottom: 20px;">
            <h1>Bienvenido al Panel de Administración de Fullsys</h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">Gestión de Planes</div>
                <div class="card-body">
                    <a href="{{ route('plans.index') }}" class="btn btn-primary btn-block">Ver y Asignar Planes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success text-white">Documentos Emitidos</div>
                <div class="card-body">
                    <a href="{{ route('documents.index') }}" class="btn btn-success btn-block">Ver Documentos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info text-white">Chat en Vivo</div>
                <div class="card-body">
                    <a href="{{ route('chat.index') }}" class="btn btn-info btn-block">Abrir Chat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
