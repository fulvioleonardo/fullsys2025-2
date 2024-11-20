
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Reservas</h1>
    <p>Aquí puedes gestionar las reservas de habitaciones.</p>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Habitación</th>
                <th>Fecha de Entrada</th>
                <th>Fecha de Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan Pérez</td>
                <td>101</td>
                <td>2024-11-20</td>
                <td>2024-11-22</td>
                <td><button class="btn btn-primary btn-sm">Ver</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
