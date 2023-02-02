<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//Uso del modelo Usuario
use App\Models\SerieDocumental;

class SerieDocumentalController extends Controller{

    public function index(){

        try {
            
            $seriesDocumentales = SerieDocumental::all();

            return response()->json([
                'data' => $seriesDocumentales,
            ], 200);
        
        } catch (\Throwable $th) {
        
            throw $th;

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

    }
    
}
