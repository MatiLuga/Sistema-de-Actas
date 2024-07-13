<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acta; // Importa el modelo Acta si lo tienes definido

class ActaController extends Controller
{
    /**
     * Muestra una lista de todas las actas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$actas = Acta::all(); compact('actas')

        return view('actas.index');
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
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'horario_entrada' => 'required|date',
            'texto' => 'required|string',
            'creado_por' => 'required|string|max:255',
        ]);

        // Crea una nueva instancia de Acta con los datos recibidos
        Acta::create([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'horario_entrada' => $request->input('horario_entrada'),
            'texto' => $request->input('texto'),
            'creado_por' => $request->input('creado_por'),
        ]);

        // Redirige a una ruta o devuelve una respuesta
        return redirect('/actas')->with('success', 'Acta creada correctamente');
    }
}
