<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Prekes;
use Illuminate\Http\Request;

class prekesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarasas = DB::table('prekes')
            ->select('id', 'pavadinimas', 'prekesKodas', 'prekesTipas')
            ->get();

        return view("admin/prekiuSarasas", ['prekes'=>$sarasas]);
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
     * @param  \App\Prekes  $prekes
     * @return \Illuminate\Http\Response
     */
    public function show(Prekes $prekes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prekes  $prekes
     * @return \Illuminate\Http\Response
     */
    public function edit($prekes_id)
    {
        $preke = DB::table('prekes')
            ->where('id', $prekes_id)
            ->first();

        return view("admin/prekiuEdit", ['preke'=>$preke]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prekes  $prekes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $prekes_id)
    {
        $update_preke = DB::table('prekes')
            ->where('id', $prekes_id)
            ->update(
                ['pavadinimas' => $request['pavadinimas'], 
                'prekesTipas' => $request['tipas'],
                'kiekis' => $request['kiekis'],
                'kaina' => $request['kaina'],
                'aprasymas' => $request['aprasymas']]
            );

            if(isset($request->nuotrauka)){
                $nuotrauka = $request->nuotrauka->store('public'); 
                $update_nuotrauka = DB::table('prekes')
                    ->where('id', $prekes_id)
                    ->update(['nuotrauka' => $nuotrauka]);
            }
        
        return redirect('/prekes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prekes  $prekes
     * @return \Illuminate\Http\Response
     */
    public function destroy($prekes_id)
    {
        $select_nuotrauka = DB::table('prekes')
            ->select('nuotrauka')
            ->where('id', $prekes_id)
            ->first();
        Storage::delete($select_nuotrauka->nuotrauka);
        //Storage::disk('public')->delete($select_nuotrauka->nuotrauka);

        $delete_preke = DB::table('prekes')
            ->where('id', $prekes_id)
            ->delete();
        
        return redirect('/prekes');
    }
}
