<?php

namespace App;
use App\Liquidacion;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = [
        'liquidacion_id', 'concepto', 'monto'
    ];


    public function liquidaciones(){
        return $this->belongsToMany(Luquidacion::class);
    }
}
