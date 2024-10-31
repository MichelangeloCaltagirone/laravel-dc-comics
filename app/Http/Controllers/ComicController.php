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

        return view("comics.index", compact("comics"));
    }

    /**
    * Display the specified resource.
    */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comicData = $request->all();

        $newComic = new Comic();
        $newComic->name = $comicData["name"];
        $newComic->description = $comicData["description"];
        $newComic->image_url = $comicData["image_url"];
        $newComic->price = $comicData["price"];
        $newComic->series = $comicData["series"];
        $newComic->sale_date = $comicData["sale_date"];
        $newComic->type = $comicData["type"];

        $newComic->save();

        return redirect()->route("comics.show", ["id" => $newComic->id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail();

        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
