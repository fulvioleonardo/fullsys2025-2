
<?php

namespace Modules\Accounting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AccountingController extends Controller
{
    public function puc()
    {
        // Mostrar el catálogo PUC
        return view('accounting::puc');
    }

    public function entries()
    {
        // Mostrar los asientos contables
        return view('accounting::entries');
    }

    public function storeEntry(Request $request)
    {
        // Guardar un nuevo asiento contable
        return response()->json(['success' => true, 'message' => 'Asiento contable registrado.']);
    }

    public function reports()
    {
        // Generar reportes financieros
        return view('accounting::reports');
    }
}
