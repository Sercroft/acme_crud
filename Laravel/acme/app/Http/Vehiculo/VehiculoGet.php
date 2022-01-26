<?php 
namespace App\Http\Vehiculo;
use App\Models\Vehiculo;
use App\Models\Propietario;

class VehiculoGet{
    public static function Obtener(){
        $vehiculo = Vehiculo::get();
        echo json_encode($vehiculo);
    }
}
?>