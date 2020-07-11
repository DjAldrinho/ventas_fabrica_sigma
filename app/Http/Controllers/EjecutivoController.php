<?php

namespace App\Http\Controllers;

use App\Ejecutivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EjecutivoController extends Controller
{
    public function index(Request $request)
    {
        $ejecutivos = Ejecutivo::all();

        return view('ejecutivos.index', compact('ejecutivos'));
    }

    public function create()
    {
        return view('ejecutivos.registro');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100|min:3',
            'identificacion' => 'string|required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            $ejecutivo = new Ejecutivo();
            $ejecutivo->nombre = $request->nombre;
            $ejecutivo->identificacion = $request->identificacion;
            $ejecutivo->estado = 'A';
            $ejecutivo->save();

            return redirect()->route('listar-ejecutivos')
                ->with('mensaje', 'Ejecutivo ' . $request->nombre . ' creado correctamente');
        }
    }
}
