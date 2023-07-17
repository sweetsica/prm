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
        $qrs = QR::whereBetween('id', [$this->startid, $this->endid]);
//        $qrs->chunkById(50,
//            function ($qrs) {
//                foreach ($qrs as $qr) {
//                    QR::where('id', $qr->id)->update(['excel' => 'Active']);
//                }
//            }
//        );
//        return $qrs->get();
        return $qrs->get();
    }
}
