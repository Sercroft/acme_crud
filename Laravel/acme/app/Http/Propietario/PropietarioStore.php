<?php 
namespace App\Http\Propietario;
use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioStore{
    public static function Crear(Request $request){
        $propietario = new Propietario();
        $propietario->id                = $request->input('id');
        $propietario->cedula            = $request->input('cedula');
        $propietario->primer_nombre     = $request->input('primer_nombre');
        $propietario->segundo_nombre    = $request->input('segundo_nombre');
        $propietario->apellidos         = $request->input('apellidos');
        $propietario->direccion         = $request->input('direccion');
        $propietario->telefono          = $request->input('telefono');
        $propietario->ciudad            = $request->input('ciudad');
        $propietario->save();

        echo json_encode($propietario);
    }
}
?>