<?php

namespace App;
use App\Consorcista;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    //
    protected $fillable = [
        'nombre', 'direccion', 'tipo_unidad','imagen'
    ];

    public function consorcistas(){
        return $this->hasMany(Consorcista::class);
    }
}
