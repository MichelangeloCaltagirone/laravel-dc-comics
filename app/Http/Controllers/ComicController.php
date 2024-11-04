<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
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
    public function store(StoreComicsRequest $request)
    {
        $request->validate();
        //     "name" => "required|string|min:2|max:255",
        //     "description" => "required|string|min:2",
        //     "image_url" => "required|url",
        //     "price" => "required|numeric",
        //     "series" => "required|string|min:2|max:255",
        //     "sale_date" => "required|date",
        //     "type" => "required|string|min:2|max:255",
        // ]);

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
        $comic = Comic::findOrFail($id);

        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicsRequest $request, string $id)
    {
        $request->validate([
            "name" => "required|string|min:2|max:255",
            "description" => "required|string|min:2",
            "image_url" => "required|url",
            "price" => "required|numeric",
            "series" => "required|string|min:2|max:255",
            "sale_date" => "required|date",
            "type" => "required|string|min:2|max:255",
        ]);

        $data = $request->all();

        $comic = Comic::findOrFail($id);
        $comic->name = $data["name"];
        $comic->description = $data["description"];
        $comic->image_url = $data["image_url"];
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];

        $comic->update();

        return redirect()->route("comics.show", ["id" => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
