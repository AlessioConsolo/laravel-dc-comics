@extends('layouts.app')

@section('title', 'Aggiungi un nuovo fumetto')

@section('content')
    <h1>Aggiungi un nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="thumb">URL Copertina:</label>
            <input type="text" id="thumb" name="thumb" required>
        </div>

        <div>
            <label for="price">Prezzo:</label>
            <input type="number" step="0.01" id="price" name="price" required>
        </div>

        <div>
            <label for="series">Serie:</label>
            <input type="text" id="series" name="series" required>
        </div>

        <div>
            <label for="sale_date">Data di uscita:</label>
            <input type="date" id="sale_date" name="sale_date" required>
        </div>

        <div>
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" required>
        </div>

        <button type="submit">Salva Fumetto</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
@endsection
