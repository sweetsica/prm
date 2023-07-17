<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HistoriesExport;

class HistoryController extends Controller
{
    public function export()
    {
        $fileName = 'Danh-sách-mã-quét.xlsx';
        $export = new HistoriesExport();

        return Excel::download($export, $fileName);
    }
}
