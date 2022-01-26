<?php 
namespace App\Http\Conductor;
use App\Models\Conductor;

class ConductorDelete{
    public static function Eliminar($conductor_id){
        $conductor = Conductor::find($conductor_id);
        $conductor->delete();
    }
}
?>