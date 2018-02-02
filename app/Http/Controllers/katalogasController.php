<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Katalogas;
use Illuminate\Http\Request;

class katalogasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prekes = DB::table('prekes')->get();
        return view("katalogas", ['prekes'=>$prekes]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Katalogas  $katalogas
     * @return \Illuminate\Http\Response
     */
    public function show(Katalogas $katalogas, $prekes_kodas)
    {
        $preke = DB::table('prekes')
            ->where('prekesKodas', '=', $prekes_kodas)
            ->first();

        return view("preke", ['preke'=>$preke]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Katalogas  $katalogas
     * @return \Illuminate\Http\Response
     */
    public function edit(Katalogas $katalogas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Katalogas  $katalogas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katalogas $katalogas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Katalogas  $katalogas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katalogas $katalogas)
    {
        //
    }
}
