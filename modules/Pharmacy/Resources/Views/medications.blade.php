
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Medicamentos</h1>
    <p>Aquí puedes gestionar los medicamentos disponibles.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>MED001</td>
                <td>Paracetamol</td>
                <td>$10</td>
                <td>100</td>
                <td><button class="btn btn-primary btn-sm">Editar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
