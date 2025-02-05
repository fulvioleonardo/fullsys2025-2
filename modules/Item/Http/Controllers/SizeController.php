<?php

namespace Modules\Item\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Item\Models\Size;
// use Modules\Item\Http\Resources\SizeCollection;
// use Modules\Item\Http\Resources\SizeResource;
// use Modules\Item\Http\Requests\SizeRequest;

class SizeController extends Controller
{
    // public function index()
    // {
    //     return view('item::sizes.index');
    // }

    // public function columns()
    // {
    //     return [
    //         'name' => 'Nombre',
    //     ];
    // }

    // public function records(Request $request)
    // {
    //     $records = Size::where($request->column, 'like', "%{$request->value}%")->latest();
    //     return new SizeCollection($records->paginate(config('tenant.items_per_page')));
    // }

    // public function record($id)
    // {
    //     $record = Size::findOrFail($id);
    //     return $record;
    // }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $category = Size::firstOrNew(['id' => $id]);
        $category->fill($request->all());
        $category->save();

        return [
            'success' => true,
            'message' => ($id)?'Registro editado con éxito':'Registro registrado con éxito',
            'data' => $category
        ];
    }

    // public function destroy($id)
    // {
    //     try {
    //         $category = Size::findOrFail($id);
    //         $category->delete();

    //         return [
    //             'success' => true,
    //             'message' => 'Registro eliminado con éxito'
    //         ];
    //     } catch (Exception $e) {
    //         return ($e->getCode() == '23000') ? ['success' => false,'message' => "El registro esta siendo usada por otros registros, no puede eliminar"] : ['success' => false,'message' => "Error inesperado, no se pudo eliminar el registro"];
    //     }
    // }
}
