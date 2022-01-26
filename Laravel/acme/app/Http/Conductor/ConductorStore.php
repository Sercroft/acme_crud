<?php 
namespace App\Http\Conductor;
use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorStore{
    public static function Crear(Request $request){
        $conductor = new Conductor();
        $conductor->id                = $request->input('id');
        $conductor->cedula            = $request->input('cedula');
        $conductor->primer_nombre     = $request->input('primer_nombre');
        $conductor->segundo_nombre    = $request->input('segundo_nombre');
        $conductor->apellidos         = $request->input('apellidos');
        $conductor->direccion         = $request->input('direccion');
        $conductor->telefono          = $request->input('telefono');
        $conductor->ciudad            = $request->input('ciudad');
        $conductor->save();

        echo json_encode($conductor);
    }
}
?>