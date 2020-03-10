<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Evento::all()
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
        $request->validate([
            'complejo_deportivo_id' => 'required|int|exists:complejos_deportivos,id',
            'start_date' => 'required|date',
            'duration_in_hours' => 'required|int|min:1'
        ]);

        Evento::create([
            'complejo_deportivo_id' => $request->get('complejo_deportivo_id'),
            'start_date' => $request->get('start_date'),
            'duration_in_hours' => $request->get('duration_in_hours')
        ]);

        return response('', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return response()->json($evento->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'complejo_deportivo_id' => 'required|int|exists:complejos_deportivos,id',
            'start_date' => 'required|date',
            'duration_in_hours' => 'required|int|min:1'
        ]);

        $evento->update([
            'complejo_deportivo_id' => $request->get('complejo_deportivo_id'),
            'start_date' => $request->get('start_date'),
            'duration_in_hours' => $request->get('duration_in_hours')
        ]);

        return response()->json($evento->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();

        return response('', 204);
    }
}
