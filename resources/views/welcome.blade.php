@extends('layouts.app')

@section('content')
    <h1>Benvenuto nella Libreria di Fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic->title }}</li>
        @endforeach
    </ul>
@endsection
