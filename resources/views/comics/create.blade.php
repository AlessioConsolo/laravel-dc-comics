<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi un nuovo fumetto</title>
</head>
<body>
    <h1>Aggiungi un nuovo fumetto</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="thumb">URL Copertina:</label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}" required>
            @error('thumb')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" required>
            @error('price')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="series">Serie:</label>
            <input type="text" id="series" name="series" value="{{ old('series') }}" required>
            @error('series')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="sale_date">Data di uscita:</label>
            <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') }}" required>
            @error('sale_date')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}" required>
            @error('type')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Salva Fumetto</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
</body>
</html>
