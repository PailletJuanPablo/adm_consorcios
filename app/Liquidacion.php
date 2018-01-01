<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pago;
use App\Gasto;
use App\Edificio;
class Liquidacion extends Model
{
    //
    protected $fillable = [
        'monto_total', 'cantidad_items', 'periodo',  'edificio_id'
    ];


    public function pagos(){
        return $this->hasMany(Pago::class);
    }

    public function gastos(){
        return $this->hasMany(Gasto::class);

    }


    public function edificio(){
        
        return $this->belongsTo(Edificio::class);

    }
}
