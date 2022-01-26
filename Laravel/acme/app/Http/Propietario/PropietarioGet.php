<?php 
namespace App\Http\Propietario;
use App\Models\Propietario;

class PropietarioGet{
    public static function Obtener(){
        $propietarios = Propietario::get();
        echo json_encode($propietarios);
    }
}
?>