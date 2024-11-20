
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Comandas</h1>
    <p>Aquí puedes gestionar las comandas del restaurante.</p>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mesa</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>Pendiente</td>
                <td><button class="btn btn-primary btn-sm">Editar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
