<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejecutivo extends Model
{
    protected $fillable = [
        'nombre', 'detalles', 'estado',
    ];

    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
}
