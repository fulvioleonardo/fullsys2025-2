<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        // Mostrar interfaz de chat
        return view('chat.index');
    }

    public function send(Request $request)
    {
        // Enviar mensaje
        return response()->json(['success' => true, 'message' => $request->message]);
    }

    public function getMessages()
    {
        // Obtener mensajes existentes
        return response()->json(['success' => true, 'messages' => []]);
    }
}
