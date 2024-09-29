<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Fumetto</title>
</head>
<body>
    <h1>Modifica Fumetto: {{ $comic->title }}</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" value="{{ $comic->title }}" required>
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" required>{{ $comic->description }}</textarea>
        </div>

        <div>
            <label for="thumb">URL Copertina:</label>
            <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}" required>
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ $comic->price }}" required>
        </div>

        <div>
            <label for="series">Serie:</label>
            <input type="text" id="series" name="series" value="{{ $comic->series }}" required>
        </div>

        <div>
            <label for="sale_date">Data di uscita:</label>
            <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>
        </div>

        <div>
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" value="{{ $comic->type }}" required>
        </div>

        <button type="submit">Aggiorna Fumetto</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
</body>
</html>
