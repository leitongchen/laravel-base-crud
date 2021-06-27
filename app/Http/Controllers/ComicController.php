<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic; 
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('title', "ASC")->get();

        return view('comics.index', [
            'comics' => $comics
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();

        $newComic = new Comic(); 

        $request->validate([
            'title' => 'required|max:255', 
            'series' => 'required|max:255', 
            'type' => 'nullable|max:40', 
            'sale_date' => 'nullable|date', 
            'price' => 'required', 
            'description' => 'nullable', 
            'thumb' => 'required',
        ]);
        // $newComic->title = $newComicData['title'];
        // $newComic->series = $newComicData['series'];
        // $newComic->type = $newComicData['type'];
        // $newComic->sale_date = $newComicData['sale_date'];
        // $newComic->price = $newComicData['price'];
        // $newComic->description = $newComicData['description'];
        // $newComic->thumb = $newComicData['thumb'];

        $newComic->fill($newComicData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', [
            'comic' => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        if (is_null($id)) {
            abort(404, 'Pagina non esistente');
        }

        return view('comics.edit', [
            'comic' => $comic,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $comicData = $request->all();

        $request->validate([
            'title' => 'required|max:255', 
            'series' => 'required|max:255', 
            'type' => 'nullable|max:40', 
            'sale_date' => 'nullable|date', 
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/', 
            'description' => 'nullable', 
            'thumb' => 'required',
        ]);
        
        $comic->update($comicData);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
