<?php

namespace App\Exports;

use App\Models\QR;
use Maatwebsite\Excel\Concerns\FromCollection;

class QrsExport implements FromCollection
{
    public function collection()
    {
        return QR::all();
    }
}
