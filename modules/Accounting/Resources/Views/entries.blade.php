
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Asientos Contables</h1>
    <p>Aquí puedes registrar y visualizar asientos contables.</p>
    <!-- Tabla de ejemplo -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Venta de productos</td>
                <td>2024-11-20</td>
                <td><button class="btn btn-primary btn-sm">Ver</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
