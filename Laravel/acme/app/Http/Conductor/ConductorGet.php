<?php 
namespace App\Http\Conductor;
use App\Models\Conductor;

class ConductorGet{
    public static function Obtener(){
        $conductores = Conductor::get();
        echo json_encode($conductores);
    }
}
?>