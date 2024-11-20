<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        // Obtener y mostrar todos los planes
        return view('plans.index');
    }

    public function store(Request $request)
    {
        // Lógica para crear un nuevo plan
        return response()->json(['success' => true, 'message' => 'Plan creado exitosamente']);
    }

    public function update($id, Request $request)
    {
        // Lógica para actualizar un plan existente
        return response()->json(['success' => true, 'message' => 'Plan actualizado exitosamente']);
    }

    public function destroy($id)
    {
        // Lógica para eliminar un plan
        return response()->json(['success' => true, 'message' => 'Plan eliminado exitosamente']);
    }
}
