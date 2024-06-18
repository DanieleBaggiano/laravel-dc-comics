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

    @section('title', 'Create Comic')

    @section('content')
        <h1>Crea un nuovo Fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control"
                    required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="thumb">URL:</label>
                <input type="url" name="thumb" id="thumb" value="{{ old('thumb') }}" class="form-control"
                    required>
                @error('thumb')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Prezzo:</label>
                <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}"
                    class="form-control" required>
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="series">Serie:</label>
                <input type="text" name="series" id="series" value="{{ old('series') }}" class="form-control"
                    required>
                @error('series')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale_date">Data di vendita:</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') }}" class="form-control"
                    required>
                @error('sale_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Tipo:</label>
                <input type="text" name="type" id="type" value="{{ old('type') }}" class="form-control"
                    required>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea fumetto</button>
        </form>
    @endsection
</body>

</html>
