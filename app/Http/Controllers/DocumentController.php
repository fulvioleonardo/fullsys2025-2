<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        // Listar documentos emitidos
        return view('documents.index');
    }

    public function show($id)
    {
        // Mostrar detalles de un documento
        return response()->json(['success' => true, 'document' => ['id' => $id, 'details' => 'Detalles del documento']]);
    }
}
