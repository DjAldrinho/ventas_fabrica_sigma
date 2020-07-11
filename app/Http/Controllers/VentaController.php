<?php

namespace App\Http\Controllers;

use App\Ejecutivo;
use App\Silla;
use App\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VentaController extends Controller
{
    public function index(Request $request)
    {
        $ventas = Venta::all();

        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {

        $sillas = Silla::all();
        $ejecutivos = Ejecutivo::all();

        return view('ventas.registro', compact('sillas', 'ejecutivos'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ejecutivo' => 'required|integer',
            'silla' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            $venta = new Venta();
            $venta->ejecutivo_id = $request->ejecutivo;
            $venta->codigo = $request->codigo;

            $venta->save();
            $venta->sillas()->attach($request->silla);




            return redirect()->route('listar-ventas')
                ->with('mensaje', 'Venta creada correctamente!');
        }
    }
}
