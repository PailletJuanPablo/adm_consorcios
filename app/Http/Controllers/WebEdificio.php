<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edificio;
use App\Consorcista;
class WebEdificio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $edificios = Edificio::withCount('consorcistas')->paginate(15);

        return view('edificios.index',compact('edificios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edificios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request->imagen;
       $imageName = time().'.'.$request->imagen->getClientOriginalExtension();
       $lugarfinal = $request->imagen->move(('images'), $imageName);

$edificio = Edificio::create([
    'nombre' => $request->nombre,
    'direccion' => $request->direccion,
    'tipo_unidad' => $request->tipo_unidad,
    'imagen' => $lugarfinal,
]);


     return redirect('edificios');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEdificio)
    {
        $edificio = Edificio::with('consorcistas')->find($idEdificio);
        return view('edificios.single', ['edificio' => $edificio]);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEdificio)
    {
        
        $edificio = Edificio::find($idEdificio);
        return view('edificios.edit',compact('edificio','idEdificio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edificio= Edificio::find($id);

        //  $devolucion = $request->all();
         // return $devolucion;
         $imageName = time().'.'.$request->imagen->getClientOriginalExtension();
         $lugarfinal = $request->imagen->move(('images'), $imageName);
         $edificio->nombre = $request->nombre;
         $edificio->direccion = $request->direccion;
         $edificio->tipo_unidad = $request->tipo_unidad;
         $edificio->imagen = $lugarfinal;
  
         $edificio->save();
  
         return redirect('edificios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edificio = Edificio::find($id);
$edificio->consorcistas()->delete();
        $edificio->delete();  
        return redirect('edificios');

    
    }
}
