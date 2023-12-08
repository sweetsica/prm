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
//        dd($request->input('datefilter'));

//        $startDate = Carbon::createFromFormat('Y/d/m', trim($parts[0]))->format('Y-d-m');
//        $endDate = Carbon::createFromFormat('Y/d/m', trim($parts[1]))->format('Y-d-m');
        $parts = explode(" tới ", $request->input('datefilter'));
        $startDate = Carbon::createFromFormat('d/m/Y', trim($parts[0]))->format('Y-m-d');
        $endDate = Carbon::createFromFormat('d/m/Y', trim($parts[1]))->format('Y-m-d');

        $fileName = 'Lịch sử quét mã từ '.$startDate.' tới '.$endDate.'.xlsx';
        $export = new HistoriesExport($startDate,$endDate);

        return Excel::download($export, $fileName);

    }
}
