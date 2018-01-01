<?php

namespace App\Http\Controllers\Edificio;
use App\Edificio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EdificioController extends Controller
{
    public function index(){
        $edificios = Edificio::all();
return response()->json($edificios);
    }
}
