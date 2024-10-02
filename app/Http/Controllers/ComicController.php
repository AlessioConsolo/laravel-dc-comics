<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all(); 
        return view('comics.index', compact('comics')); 
    }

        public function show(Comic $comic)
    {
        return view('comics.show', compact('comic')); 
    }

    public function create()
    {
        return view('comics.create'); 
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url|max:1024',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
            'artists' => 'nullable|array',
            'artists.*' => 'string|max:255',
            'writers' => 'nullable|array',
            'writers.*' => 'string|max:255',
        ]);

        
        $comic = Comic::create($validatedData);

        return redirect()->route('comics.index')->with('success', 'Fumetto creato con successo!');
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic')); 
    }

    public function update(Request $request, Comic $comic)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url|max:1024',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
            'artists' => 'nullable|array',
            'artists.*' => 'string|max:255',
            'writers' => 'nullable|array',
            'writers.*' => 'string|max:255',
        ]);

        
        $comic->update($validatedData);

        return redirect()->route('comics.index')->with('success', 'Fumetto aggiornato con successo!');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete(); 

        return redirect()->route('comics.index')->with('success', 'Fumetto eliminato con successo!');
    }
}
