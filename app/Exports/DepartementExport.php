<?php

namespace App\Exports;

use App\Departement;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartementExport implements FromCollection
{
    public function collection()
    {
        return Departement::all();
    }
}
