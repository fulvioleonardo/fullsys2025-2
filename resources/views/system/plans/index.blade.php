
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Planes</h1>
    <p>Aquí puedes ver, crear y asignar planes a los clientes.</p>
    <!-- Tabla de ejemplo -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Plan Básico</td>
                <td>$10</td>
                <td><button class="btn btn-primary btn-sm">Editar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
