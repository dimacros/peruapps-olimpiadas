<?php

namespace App\Http\Controllers;

use App\Comisario;
use Illuminate\Http\Request;

class ComisarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Comisario::all()
        ]);
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
     * @param  \App\Comisario  $comisario
     * @return \Illuminate\Http\Response
     */
    public function show(Comisario $comisario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comisario  $comisario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comisario $comisario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comisario  $comisario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comisario $comisario)
    {
        //
    }
}
