
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Habitaciones</h1>
    <p>Aquí puedes gestionar las habitaciones del hotel.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Capacidad</th>
                <th>Precio</th>
                <th>Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>101</td>
                <td>2</td>
                <td>$50</td>
                <td>Sí</td>
                <td><button class="btn btn-primary btn-sm">Editar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
