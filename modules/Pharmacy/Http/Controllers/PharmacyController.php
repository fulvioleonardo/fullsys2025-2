<?php

namespace Modules\Pharmacy\Http\Controllers;

use App\Models\Tenant\Configuration;
use App\Models\Tenant\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PharmacyController extends Controller
{
    public function index()
    {
        // Lista inicial de medicamentos
        return view('pharmacy::index');
    }

    public function updateMedication(Item $item)
    {
        // Actualización de detalles del medicamento
        $catMedication = $item->category; // Ejemplo: Categoría del medicamento
        $item->exportable = true;
        $item->save();

        return response()->json(['success' => true, 'message' => 'Medicamento actualizado']);
    }
}
