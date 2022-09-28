<?php

namespace App\Exports;

use App\Models\QR;
use Maatwebsite\Excel\Concerns\FromCollection;

class QrsExport implements FromCollection
{
    public function __construct(int $startid,$endid)
    {
        $this->startid = $startid;
        $this->endid = $endid;
    }
    public function collection()
    {
        return QR::whereBetween('id', [$this->startid, $this->endid])->get();
    }
}
