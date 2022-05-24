<?php

namespace App\Http\Controllers;

use App\Models\depense;
use App\Http\Requests\StoredepenseRequest;
use App\Http\Requests\UpdatedepenseRequest;

class DepenseController extends Controller
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
     * @param  \App\Http\Requests\StoredepenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredepenseRequest $request)
    {
        //
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
