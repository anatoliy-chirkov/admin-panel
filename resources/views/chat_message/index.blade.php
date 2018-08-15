@extends('layouts.app')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    var socket = new WebSocket('ws://localhost:8080/ratchet');

    socket.onmessage = function(event) {
        $('.list-group-item').last().after('<li class="list-group-item">' + event.data + '</li>');
    }

    $( "form" ).on( "submit", function( event ) {
        event.preventDefault();
        $.post(window.location.origin + window.location.pathname + '/store', $(this).serializeArray());
        var message = $('input[name="text"]').val();
        socket.send( message );
        return false;
    });
});
</script>

@section('content')

<div class="container">

    <div style="height: 80VH; overflow-y: auto;">
        <ul class="list-group">
        @forelse($messages as $message)
            <li class="list-group-item">{{$message->text}}, {{$message->user_id}}</li>
        @empty
            <li class="list-group-item">Пока никто не писал</li>
        @endforelse
        </ul>
    </div>

    <form class="form-inline" action="{{ route('chat.store') }}" method="POST" name="test">
        @csrf 
        <input type="number" hidden name="user_id" value="1">
        <input type="number" hidden name="chat_id" value="1">

        <div class="form-group mx-sm-3 mb-2">
            <input name="text" type="text" class="form-control" id="inputPassword2" placeholder="Введите сообщение...">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Отправить</button>
    </form>

</div>

@endsection
