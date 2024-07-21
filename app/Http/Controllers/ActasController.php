<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ActasExport;
use App\Acta;

class ActasController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'nombre');
        $direction = $request->get('direction', 'asc');

        $actas = Acta::orderBy($sort, $direction)->paginate(10);

        return view('actas.index', [
            'actas' => $actas,
        ]);
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

    public function show(Acta $acta)
    {
        return view('actas.show', [
            'acta' => $acta,
        ]);
    }

    public function destroy($id)
    {
        $acta = Acta::findOrFail($id);
        $acta->delete();
        return redirect('/actas')->with('success', 'Acta eliminada correctamente');
    }

    public function export()
    {
        $export = new ActasExport();
        return $export->export();
    }

}   