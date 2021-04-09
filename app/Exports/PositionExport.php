<?php

namespace App\Exports;

use App\Position;
use Maatwebsite\Excel\Concerns\FromCollection;

class PositionExport implements FromCollection
{
    public function collection()
    {
        return Position::all();
    }
}
