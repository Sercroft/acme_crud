<?php 
namespace App\Http\Conductor;
use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorUpdate{
    public static function Actualizar(Request $request, $conductor_id){
        $conductor                    = Conductor::find($conductor_id); 
        $conductor->cedula            = $request->input('cedula');
        $conductor->primer_nombre     = $request->input('primer_nombre');
        $conductor->segundo_nombre    = $request->input('segundo_nombre');
        $conductor->apellidos         = $request->input('apellidos');
        $conductor->direccion         = $request->input('direccion');
        $conductor->telefono          = $request->input('telefono');
        $conductor->ciudad            = $request->input('ciudad');
        $conductor->save();

        //imprimir en formato json
        echo json_encode($conductor);
    }
}
?>