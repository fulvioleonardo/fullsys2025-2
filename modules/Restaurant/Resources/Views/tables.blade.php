
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Mesas</h1>
    <p>Aquí puedes gestionar las mesas del restaurante.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Capacidad</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>4</td>
                <td>Disponible</td>
                <td><button class="btn btn-primary btn-sm">Editar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
