<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic; 

class ComicController extends Controller
{
    public function index(){
        $comics= Comic::all(); 
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic) {

        return view('comics.show', compact('comic'));
    }

    public function create() {

        return view('comics.create');
    }

    public function store(Request $request) {
        $data= $request->all();
        // dd($data);
        $newComic = Comic::create($data);

        return redirect()->route('comics.show', $newComic->id);
    }

    public function edit(Comic $comic) {

        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic) {
        $data= $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }
}
