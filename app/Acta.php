<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    /// Definir la tabla asociada
    protected $table = 'acta';

    // Definir los campos que son asignables en masa
    protected $fillable = [
        'nombre',
        'apellido',
        'horario_entrada',
        'texto',
        'creado_por',
    ];
}
