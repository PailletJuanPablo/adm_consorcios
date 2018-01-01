<?php

namespace App\Http\Controllers\Consorcista;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Consorcista;
use App\Edificio;


class ConsorcistaController extends Controller

{
    public function index(){
        $consorcistas = Consorcista::with('edificio')->get();
        
        return response()->json(['data' => $consorcistas]);


     /*   foreach ($consorcistas as $consorcista){
            echo $consorcista->nombre;
            echo $consorcista->edificio->nombre;

        }*/
    }

    public function store(Request $request){


        $campos = $request->all();

        $consorcista = Consorcista::create($campos);

        return response()->json($consorcista);

    }

    public function show ($id){


     $consorcista= Consorcista::with('edificio')->find($id);
      return response()->json($consorcista);



    }

    public function update(Request $request, $id){

        $consorcista= Consorcista::with('edificio')->find($id);

        $campos = $request->all();

        $consorcista->nombre = $request->nombre;
        $consorcista->porcentaje_ocupacion = $request->porcentaje_ocupacion;
    
        $consorcista->save();

        return response()->json($consorcista);

    }
}
