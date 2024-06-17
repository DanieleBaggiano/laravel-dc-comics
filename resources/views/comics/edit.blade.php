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
        <h1>Modifica fumetto</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $comic->title) }}">
            <br>

            <label for="description">Descrizione:</label>
            <textarea id="description" name="description">{{ old('description', $comic->description) }}"></textarea>
            <br>

            <label for="thumb">URL:</label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            <br>

            < </body>

    </html>
