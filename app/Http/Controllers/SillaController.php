<?php

namespace App\Http\Controllers;

use App\Silla;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SillaController extends Controller
{
    public function index(Request $request)
    {
        $sillas = Silla::all();

        return view('sillas.index', compact('sillas'));
    }

    public function create()
    {
        return view('sillas.registro');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|min:3',
            'detalles' => 'string|required',
            'valor' => 'integer|required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            $silla = new Silla();
            $silla->nombre = $request->nombre;
            $silla->valor = $request->valor;
            $silla->detalles = $request->detalles;
            $silla->estado = 'A';
            $silla->save();

            return redirect()->route('listar-sillas')
                ->with('mensaje', 'La Silla ' . $request->nombre . ' Ha Sido creada Correctamente');
        }
    }
}
