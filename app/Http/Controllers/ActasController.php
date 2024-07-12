<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Acta; // Importa el modelo Acta si lo tienes definido

class ActasController extends Controller
{
    /**
     * Muestra una lista de todas las actas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actas = Acta::all();

        return view('actas.index', compact('actas'));
    }

    /**
     * Muestra el formulario para crear una nueva acta.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actas.create');
    }

    /**
     * Almacena una nueva acta en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'horario_entrada' => 'required|date',
            'texto' => 'required|string',
            'creado_por' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        Acta::create($request->all());
    
        return redirect('/actas')->with('success', 'Acta creada correctamente');
        
    }
}