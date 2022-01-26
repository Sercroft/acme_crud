<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Http\Conductor\ConductorStore;
use App\Http\Conductor\ConductorGet;
use App\Http\Conductor\ConductorUpdate;
use App\Http\Conductor\ConductorDelete;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ConductorGet::Obtener();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ConductorStore::Crear($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conductor  $conductor_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $conductor_id)
    {
        ConductorUpdate::Actualizar($request, $conductor_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conductor  $conductor_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conductor $conductor_id)
    {
        ConductorDelete::Eliminar($conductor_id);
    }
}
