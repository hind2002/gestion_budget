<?php

namespace App\Http\Controllers;

use App\Models\revenu;
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
        //
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
