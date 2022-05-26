<?php

namespace App\Http\Controllers;

use App\Models\compte;
use App\Models\revenu;
use App\Models\source;
use App\Http\Requests\StorerevenuRequest;
use App\Http\Requests\UpdaterevenuRequest;

class RevenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.charge')->with([
            'sources' => source::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function ajouterrevenu(Request $request)
    // {
    //    $this->validate($request,[
    //        "valeur_" => "required|min:3",
    //        "budget" => "nullable|numeric",
    //         "description"=>"required"

    //    ]);
    //    $title=$request->title;
    //    compte::create([
    //     "nom" =>$request->nom ,
    //     "user_id" => auth()->user()->id,
    //     "budget" => $request->budget,
    //      "description"=>$request->description
    //    ]);
    //    return redirect()->route('compte.show')->with([
    //        'success'=>'Ajout avec succes'
    //    ]);

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerevenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerevenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\revenu  $revenu
     * @return \Illuminate\Http\Response
     */
    public function show(revenu $revenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\revenu  $revenu
     * @return \Illuminate\Http\Response
     */
    public function edit(revenu $revenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterevenuRequest  $request
     * @param  \App\Models\revenu  $revenu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterevenuRequest $request, revenu $revenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\revenu  $revenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(revenu $revenu)
    {
        //
    }
}
