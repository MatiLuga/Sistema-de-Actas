<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\ActasExport;
use App\Acta; // Importa el modelo Acta si lo tienes definido

class ActasController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search'); // Obtiene el valor de la consulta de búsqueda enviada desde la URL
        $sort = $request->get('sort', 'horario_entrada'); // Ordenar por 'horario_entrada' por defecto

        $actas = Acta::query() // consulta sobre el modelo Acta
            // Aplico filtros
            ->when($search, function($query, $search) {
                $query->where('nombre', 'like', "%$search%") // filtros por nombre
                      ->orWhere('apellido', 'like', "%$search%"); // filtros por apellido
            })
            ->orderBy($sort)
            ->paginate(10);

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

    public function export()
    {
        return Excel::download(new ActasExport, 'actas.xlsx');
    }

}   