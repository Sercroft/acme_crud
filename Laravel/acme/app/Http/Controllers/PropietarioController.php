<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use App\Http\Propietario\PropietarioStore;
use App\Http\Propietario\PropietarioGet;
use App\Http\Propietario\PropietarioUpdate;
use App\Http\Propietario\PropietarioDelete;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        PropietarioGet::Obtener();
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
        PropietarioStore::Crear($request);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propietario  $propietario_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $propietario_id)
    {
        //
        PropietarioUpdate::Actualizar($request, $propietario_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propietario  $propietario_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario_id)
    {
        //
        PropietarioDelete::Eliminar($propietario_id);
    }
}
