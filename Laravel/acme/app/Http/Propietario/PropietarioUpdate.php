<?php 
namespace App\Http\Propietario;
use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioUpdate{
    public static function Actualizar(Request $request, $propietario_id){
        $propietario                    = Propietario::find($propietario_id); 
        $propietario->cedula            = $request->input('cedula');
        $propietario->primer_nombre     = $request->input('primer_nombre');
        $propietario->segundo_nombre    = $request->input('segundo_nombre');
        $propietario->apellidos         = $request->input('apellidos');
        $propietario->direccion         = $request->input('direccion');
        $propietario->telefono          = $request->input('telefono');
        $propietario->ciudad            = $request->input('ciudad');
        $propietario->save();

        //imprimir en formato json
        echo json_encode($propietario);
    }
}
?>