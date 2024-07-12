<?php

namespace App\Exports;

use App\Acta;
use Maatwebsite\Excel\Facades\Excel;

class ActasExport
{
    public function export()
    {
        Excel::create('actas', function($excel) {
            $excel->sheet('Sheet1', function($sheet) {
                $sheet->fromArray(Acta::all()->toArray());
            });
        })->download('xlsx');
    }
}
