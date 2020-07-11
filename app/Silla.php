<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silla extends Model
{
    protected $fillable = [
        'nombre', 'identificacion', 'estado', 'valor'
    ];

    public function ventas()
    {
        return $this->belongsToMany('App\Venta', 'ventas_sillas');
    }
}
