
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Plan Único de Cuentas</h1>
    <p>Aquí puedes gestionar el catálogo de cuentas contables.</p>
    <!-- Tabla de ejemplo -->
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1110</td>
                <td>Caja</td>
                <td>Activo</td>
                <td><button class="btn btn-primary btn-sm">Editar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
