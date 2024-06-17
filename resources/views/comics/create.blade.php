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
        <h1>Crea un nuovo fumetto</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            <br>

            <label for="description">Descrizione:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            <br>

            <label for="thumb">URL:</label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
            <br>

            <label for="price">Prezzo:</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">
            <br>

            <label for="series">Serie:</label>
            <input type="text" id="series" name="series" value="{{ old('series') }}">
            <br>

            <label for="sale_date">Data di vendita:</label>
            <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            <br>

            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}">
            <br>

            <button type="submit">Crea fumetto</button>
        </form>
    @endsection

</body>

</html>
