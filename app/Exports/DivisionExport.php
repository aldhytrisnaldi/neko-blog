<?php

namespace App\Exports;

use App\Division;
use Maatwebsite\Excel\Concerns\FromCollection;

class DivisionExport implements FromCollection
{
    public function collection()
    {
        return Division::all();
    }
}
