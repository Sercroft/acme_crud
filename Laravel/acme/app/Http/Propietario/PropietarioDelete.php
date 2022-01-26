<?php 
namespace App\Http\Propietario;
use App\Models\Propietario;

class EmployeeDelete{
    public static function Eliminar($propietario_id){
        $propietario = Porpietario::find($propietario_id);
        $propietario->delete();
    }
}
?>