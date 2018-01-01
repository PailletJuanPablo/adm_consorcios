<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Liquidacion;
use App\Consorcista;
class Pago extends Model
{
    //
    protected $fillable = [
        'fecha_pago', 'consorcista_id', 'liquidacion_id'
    ];

    public function consorcista(){
        return $this->belongsTo(Consorcista::class);
    }

    public function liquidacion(){
        return $this->belongsTo(Liquidacion::class);

    }
}
