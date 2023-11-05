<?php

namespace App\Http\Controllers;

use App\Models\History;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HistoriesExport;

class HistoryController extends Controller
{
    public function exportByRange()
    {
        return view('FrontEnd.HistoryExport');
    }

    public function splitdate(Request $request)
    {
        $parts = explode(" tới ", $request->input('datefilter'));
        $startDate = Carbon::createFromFormat('d/m/Y', trim($parts[0]))->format('Y-d-m');
        $endDate = Carbon::createFromFormat('d/m/Y', trim($parts[1]))->format('Y-d-m');
        $fileName = 'Lịch sử quét mã từ '.$startDate.' tới '.$endDate.'.xlsx';
        $export = new HistoriesExport($startDate,$endDate);

        return Excel::download($export, $fileName);

    }
}
