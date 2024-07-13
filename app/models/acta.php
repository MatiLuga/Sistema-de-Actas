<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    protected $table = 'actas';
    protected $fillable = ['nombre', 'apellido', 'horario_entrada', 'texto', 'creado_por'];
}
