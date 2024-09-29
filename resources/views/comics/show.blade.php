<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $comic->title }}</title>
</head>
<body>
    <h1>{{ $comic->title }}</h1>

    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>{{ $comic->description }}</p>
    <p>Prezzo: {{ $comic->price }} €</p>
    <p>Serie: {{ $comic->series }}</p>
    <p>Data di uscita: {{ $comic->sale_date }}</p>
    <p>Tipo: {{ $comic->type }}</p>

    <a href="{{ route('comics.index') }}">Torna alla lista</a>
</body>
</html>
