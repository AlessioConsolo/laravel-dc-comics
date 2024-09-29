<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        // Recupera tutti i fumetti
        $comics = Comic::all();

        // Ritorna la vista 'comics.index' e passa la variabile $comics alla vista
        return view('comics.index', ['comics' => $comics]);
    }

    public function show($id)
    {
        // Recupera il fumetto per ID
        $comic = Comic::findOrFail($id);
        // Ritorna la vista con i dettagli del fumetto
        return view('comics.show', ['comic' => $comic]);
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
        ]);

        // Crea un nuovo fumetto
        Comic::create($data);

        return redirect()->route('comics.index');
    }

}
