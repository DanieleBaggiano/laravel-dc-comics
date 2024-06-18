<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
        ], [
            'title.required' => 'Il titolo è obbligatorio.',
            'description.required' => 'La descrizione è obbligatoria.',
            'thumb.required' => 'L\'URL dell\'immagine è obbligatorio.',
            'thumb.url' => 'Inserisci un URL valido per l\'immagine.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'series.required' => 'La serie è obbligatoria.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'Inserisci una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
        ]);

        Comic::create($request->only([
            'title',
            'description',
            'thumb',
            'price',
            'series',
            'sale_date',
            'type',
        ]));

        return redirect()->route('comics.index')->with('success', 'Fumetto creato con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
        ], [
            'title.required' => 'Il titolo è obbligatorio.',
            'description.required' => 'La descrizione è obbligatoria.',
            'thumb.required' => 'L\'URL dell\'immagine è obbligatorio.',
            'thumb.url' => 'Inserisci un URL valido per l\'immagine.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'series.required' => 'La serie è obbligatoria.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'Inserisci una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
        ]);

        $comic = Comic::findOrFail($id);
        $comic->update($request->all());

        return redirect()->route('comics.index')->with('success', 'Fumetto aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully.');
    }
}
