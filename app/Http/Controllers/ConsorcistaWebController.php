<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Consorcista;
use App\Edificio;
class ConsorcistaWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consorcistas = Consorcista::with('edificio')->paginate(15);
        return view('consorcistas.index', ['consorcistas' => $consorcistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edificios = Edificio::all();

        return view('consorcistas.crear',compact('edificios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Consorcista::create($request->all());
        return redirect('consorcistas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsorcistaWeb  $consorcistaWeb
     * @return \Illuminate\Http\Response
     */
    public function show(ConsorcistaWeb $consorcistaWeb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsorcistaWeb  $consorcistaWeb
     * @return \Illuminate\Http\Response
     */
    public function edit($idConsorcista)
    {
        $consorcista = Consorcista::find($idConsorcista);
        $edificios = Edificio::all()->except($consorcista->edificio->id);
        return view('consorcistas.editar',compact('consorcista','idConsorcista', 'edificios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsorcistaWeb  $consorcistaWeb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consorcista= Consorcista::find($id);

      //  $devolucion = $request->all();
       // return $devolucion;

       $consorcista->nombre = $request->nombre;
       $consorcista->porcentaje_ocupacion = $request->porcentaje_ocupacion;
       $consorcista->edificio_id = $request->edificio_id;

       $consorcista->save();

       return redirect('consorcistas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsorcistaWeb  $consorcistaWeb
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsorcistaWeb $consorcistaWeb)
    {
        //
    }
}
