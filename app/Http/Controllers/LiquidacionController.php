<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liquidacion;
use App\Pago;
use App\Consorcista;
class LiquidacionController extends Controller
{
    public function index(){
        $consorcistas = Consorcista::with('edificio')->get();
        $pagos = Pago::with('consorcista','liquidacion')->take(5)->get();
        return response()->json(['data' => $pagos]);


    }

    public function show ($id){

    }
}
