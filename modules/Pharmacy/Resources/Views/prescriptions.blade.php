
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Recetas</h1>
    <p>Aquí puedes gestionar las recetas médicas registradas.</p>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan Pérez</td>
                <td>Dr. González</td>
                <td>2024-11-20</td>
                <td><button class="btn btn-primary btn-sm">Ver</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
