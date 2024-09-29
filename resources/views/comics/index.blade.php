<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Fumetti</title>
</head>
<body>
    <h1>Archivio di Fumetti</h1>

    <ul>
        @foreach($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                - Prezzo: {{ $comic->price }} €
            </li>
        @endforeach
    </ul>

    <a href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto</a>
</body>
</html>
