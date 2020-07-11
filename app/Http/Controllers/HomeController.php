<?php

namespace App\Http\Controllers;

use App\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){


        $total_ventas =  DB::select(DB::raw("
             SELECT COUNT(*) AS cuenta
            FROM ventas_sillas
            INNER JOIN sillas ON sillas.id = ventas_sillas.silla_id
            INNER JOIN ventas ON ventas.id = ventas_sillas.venta_id
            "
        ));

        $total_ventas_ejecutivo =  DB::select(DB::raw("
            SELECT COUNT(*) AS cuenta, ejecutivos.nombre
            FROM ventas_sillas
            INNER JOIN sillas ON sillas.id = ventas_sillas.silla_id
            INNER JOIN ventas ON ventas.id = ventas_sillas.venta_id
            INNER JOIN ejecutivos ON ejecutivos.id = ventas.ejecutivo_id
            GROUP BY ejecutivos.id
            "
        ));

        $total_suma_ejecutivo =  DB::select(DB::raw("
            SELECT SUM(sillas.valor) AS suma, ejecutivos.nombre
            FROM ventas_sillas
            INNER JOIN sillas ON sillas.id = ventas_sillas.silla_id
            INNER JOIN ventas ON ventas.id = ventas_sillas.venta_id
            INNER JOIN ejecutivos ON ejecutivos.id = ventas.ejecutivo_id
            GROUP BY ejecutivos.id
            "
        ));

        return view('welcome', compact('total_ventas', 'total_ventas_ejecutivo', 'total_suma_ejecutivo'));
    }
}
