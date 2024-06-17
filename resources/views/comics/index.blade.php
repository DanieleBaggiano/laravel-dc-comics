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
        <h1>Fumetti</h1>
        <a href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Cancella</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endsection
</body>

</html>
