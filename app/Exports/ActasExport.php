<?php

namespace App\Exports;

use App\Acta;
use Maatwebsite\Excel\Concerns\FromCollection;

class ActasExport implements FromCollection
{
    public function collection()
    {
        return Acta::all();
    }
}