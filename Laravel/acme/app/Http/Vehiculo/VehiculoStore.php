<?php 
namespace App\Http\Vehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoStore{
    public static function Crear(Request $request){
        $vehiculo = new Vehiculo();
        $vehiculo->id                   = $request->input('id');
        $vehiculo->placa                = $request->input('placa');
        $vehiculo->color                = $request->input('color');
        $vehiculo->marca                = $request->input('marca');
        $vehiculo->tipo_vehiculo        = $request->input('tipo_vehiculo');
        $vehiculo->conductor_id         = $request->input('conductor_id');
        $vehiculo->propietario_id       = $request->input('propietario_id');
        $vehiculo->save();

        echo json_encode($vehiculo);
    }
}
?>