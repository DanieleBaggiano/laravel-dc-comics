<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Elenco dei fumetti</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <h2>{{ $comic->title }}</h2>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
                <p><strong>Prezzo:</strong> {{ $comic->price }}</p>
                <p><strong>Series:</strong> {{ $comic->series }}</p>
                <p><strong>Data di vendita:</strong> {{ $comic->sale_date }}</p>
                <p><strong>Tipo:</strong> {{ $comic->type }}</p>
            </li>
        @endforeach
    </ul>
</body>

</html>
