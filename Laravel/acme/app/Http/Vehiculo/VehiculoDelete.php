<?php 
namespace App\Http\Vehiculo;
use App\Models\Vehiculo;

class VehiculoDelete{
    public static function Eliminar($vehiculo_id){
        $vehiculo = Vehiculo::find($vehiculo_id);
        $vehiculo->delete();
    }
}
?>