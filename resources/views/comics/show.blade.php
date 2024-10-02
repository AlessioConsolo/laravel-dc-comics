@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <h1>{{ $comic->title }}</h1>

    <div>
        <strong>Descrizione:</strong>
        <p>{{ $comic->description }}</p>
    </div>

    <div>
        <strong>Copertina:</strong>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} cover" style="max-width: 200px;">
    </div>

    <div>
        <strong>Prezzo:</strong>
        <p>${{ number_format((float) $comic->price, 2) }}</p>
    </div>

    <div>
        <strong>Serie:</strong>
        <p>{{ $comic->series }}</p>
    </div>

    <div>
        <strong>Data di uscita:</strong>
        <p>{{ \Carbon\Carbon::parse($comic->sale_date)->format('d/m/Y') }}</p>
    </div>

    <div>
        <strong>Tipo:</strong>
        <p>{{ $comic->type }}</p>
    </div>

    <div>
        <a href="{{ route('comics.edit', $comic->id) }}">Modifica Fumetto</a>
    </div>

    <div>
        <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
    </div>
@endsection
