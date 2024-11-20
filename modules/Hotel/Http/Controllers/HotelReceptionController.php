<?php

namespace Modules\Hotel\Http\Controllers;

use Modules\Hotel\Models\HotelRoom;
use Modules\Hotel\Models\HotelFloor;
use Modules\Hotel\Models\HotelRent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HotelReceptionController extends Controller
{
    public function index()
    {
        // Obtener lista de habitaciones y pisos
        $rooms = HotelRoom::all();
        $floors = HotelFloor::where('active', true)->get();

        return view('hotel::reception.index', compact('rooms', 'floors'));
    }

    public function updateRoomStatus(Request $request)
    {
        // Actualización del estado de la habitación
        $room = HotelRoom::find($request->room_id);
        if (!$room) {
            return response()->json(['success' => false, 'message' => 'Habitación no encontrada'], 404);
        }
        $room->status = $request->status;
        $room->save();

        return response()->json(['success' => true, 'message' => 'Estado de la habitación actualizado']);
    }
}
