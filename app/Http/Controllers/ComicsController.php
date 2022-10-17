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
        $comics = $request->all();

        $c = new Comics();

        // Assegnazione variabili al model
        
        // $c->name = $comics['title'];
        // $c->description = $comics['description'];
        // $c->thumb = $comics['thumb'];
        // $c->price = $comics['price'];
        // $c->series = $comics['series'];
        // $c->sale_date = $comics['sale_date'];
        // $c->type = $comics['type'];

        $c->fill($comics);

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
        $comics = Comics::findOrFail($id);

        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
