@extends('layouts.app')

@section('title', 'Elenco Fumetti')

@section('content')
    <h1>Elenco Fumetti</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <h2><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2>
                <p>Prezzo: {{ $comic->price }}</p>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto</a>
@endsection
