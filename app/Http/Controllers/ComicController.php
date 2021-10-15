<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:comics|string|min:3|max:50',
            'description'=>'required|unique:comics|string|min:10|max:500',
            'thumb'=>'required|unique:comics|string|min:10|max:200',
            'price'=>'required|numeric|min:1|max:500',
            'series'=>'required|string|min:5|max:50',
            'sale_date'=>'required|date',
            'type'=>'required|string|min:10|max:50'
        ]);

        $data = $request->all();
        $comic = new Comic;
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('alert', $comic->title);
    }

    public function trash(Comic $comic) 
    {   
        $comics = Comic::onlyTrashed()->get();
        return view('comics.trash', compact('comics'));
    }

    public function restore($id)
    {
        $comic = Comic::withTrashed()->find($id);
        $comic->restore();
        return redirect()->route('comics.index');
    }
}
