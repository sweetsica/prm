<?php

namespace App\Exports;

use App\Models\Customer;
use App\Models\History;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;

class HistoriesExport implements FromCollection, WithMapping, WithHeadings, WithTitle, ShouldAutoSize
{
    public function __construct($startDate,$endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
//        $this->startMonth = $startMonth;
//        $this->endMonth = $endMonth;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//        $histories = History::all();
//        dd($this->startDate.' - '. $this->endDate);
        $histories = History::whereBetween('created_at', [$this->startDate, $this->endDate])->orderBy('id', 'DESC')->get();
        return $histories;
    }

    public function map($history): array
    {
        // Chuyển đổi dữ liệu của từng dòng
        return [
            'Column 1' => $history['id'],
            'Column 2' => $history['customer_id'],
            'Column 3' => Customer::where('id','=',$history['customer_id'])->value('name'),
            'Column 4' => $history['qr_specialCode'],
            'Column 5' => $history['product_name'],
            'Column 6' => $history['product_id'],
            'Column 7' => $history['ipaddress'],
            'Column 8' => $history['price'],
            'Column 9' => $history['qr_id'],
            'Column 10' => $history['created_at'],
            'Column 11' => $history['updated_at'],
        ];
    }

    public function headings(): array
    {
        // Định nghĩa tiêu đề cột
        return ['ID', 'ID khách hàng','Tên khách', 'Mã QR đã quét', 'Tên sản phẩm','Mã sản phẩm','Địa chỉ IP','Giá sản phẩm','ID QR','Ngày tạo','Ngày cập nhật'];
    }

    public function title(): string
    {
        // Đặt tiêu đề cho bảng dữ liệu
        return 'Danh sách mã quét';
    }
}
