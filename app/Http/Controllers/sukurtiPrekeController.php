<?php

namespace App\Http\Controllers;

use App\Prekes;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class sukurtiPrekeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin/sukurtiPreke");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $preke = new Prekes();

        $preke->nuotrauka = $request->nuotrauka->store('public'); 
        $preke->pavadinimas = $request['pavadinimas'];
        $preke->prekesKodas = md5($request['pavadinimas']);
        $preke->prekesTipas = $request['tipas'];
        $preke->kiekis = $request['kiekis'];
        $preke->kaina = $request['kaina'];
        $preke->aprasymas = $request['aprasymas'];

        $preke->save();

        return redirect('/sukurti');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SukurtiPreke  $sukurtiPreke
     * @return \Illuminate\Http\Response
     */
    public function show(SukurtiPreke $sukurtiPreke)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SukurtiPreke  $sukurtiPreke
     * @return \Illuminate\Http\Response
     */
    public function edit(SukurtiPreke $sukurtiPreke)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SukurtiPreke  $sukurtiPreke
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SukurtiPreke $sukurtiPreke)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SukurtiPreke  $sukurtiPreke
     * @return \Illuminate\Http\Response
     */
    public function destroy(SukurtiPreke $sukurtiPreke)
    {
        //
    }
}
