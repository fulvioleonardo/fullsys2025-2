
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chat en Vivo</h1>
    <div id="chat-box" style="border: 1px solid #ccc; height: 300px; overflow-y: auto; margin-bottom: 10px; padding: 10px;">
        <!-- Mensajes -->
    </div>
    <form id="chat-form">
        <div class="input-group">
            <input type="text" id="message" class="form-control" placeholder="Escribe tu mensaje aquí...">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</div>

<script>
    const chatForm = document.getElementById('chat-form');
    chatForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const message = document.getElementById('message').value;
        if (message) {
            const chatBox = document.getElementById('chat-box');
            chatBox.innerHTML += `<div><strong>Tú:</strong> ${message}</div>`;
            document.getElementById('message').value = '';
        }
    });
</script>
@endsection
