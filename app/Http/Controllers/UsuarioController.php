<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


//Uso del modelo Usuario
use App\Models\Usuario;

class UsuarioController extends Controller{

    public function index(){

        try {
            $roles = Usuario::where('is_activo', '!=', '0')->get();

            return response()->json($roles, 200);

        } catch (\Throwable $th) {
            //throw $th;

            return response()->json(["msg" => "Ocurrio un error en el servidor"], 500);

        }

    }

    public function storage(Request $request){

        $validator = Validator::make($request->all(), [
            'rol_id' => 'nullable|integer',
            'nombre_rol' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        try {
            
            Usuario::create([
                'rol_id' => $request->rol_id,
                'nombre_rol' => $request->nombre_rol
            ]);

        } catch (\Throwable $th) {
            //throw $th;

            return response()->json(["msg" => "Ocurrio un error en el servidor"], 500);
        }
        
        return response()->json(["msg" => "Nodo agregado con éxito"], 201);
        
    }

    public function destroy(Request $request, $id){

        try {
            
            Usuario::where('id', '=', $id)->update(['is_activo' => 0]);

        } catch (\Throwable $th) {
            return response()->json(["msg" => "Ocurrio un error en el servidor"], 500);
        }

        return response()->json(["msg" => "Nodo eliminado con éxito"], 201);

    }

    

}
