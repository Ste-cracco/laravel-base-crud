<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comics::all();
        return view('comics.index', compact('comics')); //comics.index riguada il file index nella cartella comics
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $comics = $request->all();
        $params = $request->validate([
            'title' => 'required | max:50',
            'description' => 'required',
            'thumb' => 'nullable',
            'price' => 'required | numeric | not_in:0',
            'series' => 'required | max:100',
            'sale_date' => 'required | date',
            'type' => 'required | max:30',
        ]);


        $c = new Comics();

        // Assegnazione variabili al model
        
        // $c->name = $comics['title'];
        // $c->description = $comics['description'];
        // $c->thumb = $comics['thumb'];
        // $c->price = $comics['price'];
        // $c->series = $comics['series'];
        // $c->sale_date = $comics['sale_date'];
        // $c->type = $comics['type'];

        $c->fill($params);

        $c->save();

        // É possibile fare tutte queste operazioni con:
        // $c = Comics::create($comics)

        return redirect()->route('comics.show', $c);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comics::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comics::findOrFail($id);

        return view('comics.edit', compact('comic'));
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
        $comic = Comics::findOrFail($id);

        $params = $request->validate([
            'title' => 'required | max:50',
            'description' => 'required',
            'thumb' => 'nullable',
            'price' => 'required | numeric | not_in:0',
            'series' => 'required | max:100',
            'sale_date' => 'required | date',
            'type' => 'required | max:30',
        ]);

        $comic->update($params);

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
        $comic = Comics::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
        
       

    }
}
