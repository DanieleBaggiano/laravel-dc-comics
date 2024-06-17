<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>Prezzo: ${{ $comic->price }}</p>
        <p>Serie: {{ $comic->series }}</p>
        <p>Data vendita: {{ $comic->sale_date }}</p>
        <p>Tipo: {{ $comic->type }}</p>
        <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>
        <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    @endsection

</body>

</html>
