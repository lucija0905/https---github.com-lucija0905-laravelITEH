<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Musterija;
use Illuminate\Http\Request;
use App\Http\Resources\MusterijaResource;

class MusterijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musterije = Musterija::all();
        return MusterijaResource::collection($musterije);
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
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function show(Musterija $musterija)
    {
        return new MusterijaResource($musterija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function edit(Musterija $musterija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musterija $musterija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musterija $musterija)
    {
        //
    }
}
