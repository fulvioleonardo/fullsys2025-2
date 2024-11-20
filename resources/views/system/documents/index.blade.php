
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Documentos Emitidos</h1>
    <p>Aquí puedes ver todos los documentos emitidos.</p>
    <!-- Tabla de ejemplo -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Cliente A</td>
                <td>$100</td>
                <td>2024-11-20</td>
                <td><button class="btn btn-primary btn-sm">Ver</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
