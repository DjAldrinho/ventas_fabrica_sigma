<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'ejecutivo_id', 'silla_id'
    ];

    public function ejecutivo()
    {
        return $this->belongsTo('App\Ejecutivo');
    }

    public function sillas()
    {
        return $this->belongsToMany('App\Silla', 'ventas_sillas');
    }

}
