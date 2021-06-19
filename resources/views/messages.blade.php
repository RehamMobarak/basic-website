@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
        <ul class="list-group p-2">
            <li class="list-group-item"> <em>Name: </em>  {{ $message->Name }}</li>
            <li class="list-group-item"><em>Email: </em> {{ $message->Email }}</li>
            <li class="list-group-item"><em>Subject: </em> {{ $message->Subject }}</li>
            <li class="list-group-item"><em>Message: </em> {{ $message->Message }}</li>
        </ul>
    @endforeach
@endsection
