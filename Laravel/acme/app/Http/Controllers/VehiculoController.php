<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Http\Vehiculo\VehiculoStore;
use App\Http\Vehiculo\VehiculoGet;
use App\Http\Vehiculo\VehiculoUpdate;
use App\Http\Vehiculo\VehiculoDelete;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        VehiculoGet::Obtener();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        VehiculoStore::Crear($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehiculo_id)
    {
        VehiculoUpdate::Actualizar($request, $vehiculo_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo_id)
    {
        VehiculoDelete::Eliminar($vehiculo_id); 
    }
}
