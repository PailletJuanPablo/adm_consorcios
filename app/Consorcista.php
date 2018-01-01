<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Edificio;
use App\Pago;
class Consorcista extends Model
{
    //
    protected $fillable = [
        'nombre', 'porcentaje_ocupacion', 'edificio_id'
    ];

  

    public function edificio(){
        return $this->belongsTo(Edificio::class);
    }

    public function pagos(){
        return $this->hasMany(Pago::class);
    }

    public function abonar($monto){
       $porcentaje_ocupacion = $this->porcentaje_ocupacion;
       $numero = $monto * $porcentaje_ocupacion/100;
       return $numero;
    }
}
