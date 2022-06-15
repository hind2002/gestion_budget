<?php

namespace App\Http\Controllers;

use App\Models\compte;
use App\Models\depense;
use App\Models\categorie_depense;
use App\Http\Requests\StoredepenseRequest;
use App\Http\Requests\UpdatedepenseRequest;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(compte $compte)
    {
        return view('forms.depenses')->with([
            'CategorieDepense' => categorie_depense::get(),
            'compte' => $compte,
            
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredepenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredepenseRequest $request, compte $compte)
    {
      
        depense::create([
            "compte_id" => $compte->id,
            "valeur_depense_d"=>$request->valeur_depense,
            "name_d"=>$request->name_d,
            "date_d"=>$request->date_d,

        ]);
        $compte->update([
            "budget" => $compte->budget - $request->valeur_depense
        ]);
        return redirect()->route('compte.show')->with([
            'depenses' => depense::get(),
            
            
            
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function show(depense $depense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function edit(depense $depense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepenseRequest  $request
     * @param  \App\Models\depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedepenseRequest $request, depense $depense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function destroy(depense $depense)
    {
        //
    }
}
