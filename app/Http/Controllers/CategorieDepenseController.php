<?php

namespace App\Http\Controllers;

use App\Models\categorie_depense;
use App\Http\Requests\Storecategorie_depenseRequest;
use App\Http\Requests\Updatecategorie_depenseRequest;

class CategorieDepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('forms.depenses')->with([
                'CategorieDepense' => categorie_depense::get()
            ]);
        
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
     * @param  \App\Http\Requests\Storecategorie_depenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecategorie_depenseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorie_depense  $categorie_depense
     * @return \Illuminate\Http\Response
     */
    public function show(categorie_depense $categorie_depense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorie_depense  $categorie_depense
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie_depense $categorie_depense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecategorie_depenseRequest  $request
     * @param  \App\Models\categorie_depense  $categorie_depense
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecategorie_depenseRequest $request, categorie_depense $categorie_depense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorie_depense  $categorie_depense
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorie_depense $categorie_depense)
    {
        //
    }
}
