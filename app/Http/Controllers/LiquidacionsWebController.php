<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liquidacion;
use App\Pago;
use App\Consorcista;
use App\Edificio;
use Barryvdh\DomPDF\Facade as PDF;



class LiquidacionsWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $liquidaciones = Liquidacion::with('edificio')->paginate(15);
     return view('liquidaciones.index', compact('liquidaciones'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edificios = Edificio::all();

        return view('liquidaciones.create', compact('edificios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $liquidacion = Liquidacion::create($request->all());
        return redirect()->route('liquidacion.gastos.create', ['liquidacionid' => $liquidacion->id]);

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $liquidacion = Liquidacion::find($id);
      
        $monto_total = $liquidacion->monto_total;

        $edificio = $liquidacion->edificio;
        $consorcistas = $edificio->consorcistas;


        $gastos = $liquidacion->gastos;

     


     // return $consorcistas;
    //  return view('consorcistas.talonario',compact('consorcistas', 'monto_total','gastos'));

      $pdf = PDF::loadView('pdf.talonario', compact('consorcistas', 'monto_total','gastos', 'edificio', 'liquidacion'));
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'deja-vu']);

      return $pdf->stream('liquidacion.pdf');
      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
