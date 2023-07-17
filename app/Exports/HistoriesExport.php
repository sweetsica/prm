<?php

namespace App\Exports;

use App\Models\History;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class HistoriesExport implements FromCollection, WithMapping, WithHeadings, WithTitle, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $histories = History::all();
        return $histories;
    }

    public function map($history): array
    {
        // Chuyển đổi dữ liệu của từng dòng
        return [
            'Column 1' => $history['id'],
            'Column 2' => $history['customer_id'],
            'Column 3' => $history['qr_specialCode'],
            'Column 4' => $history['product_name'],
            'Column 5' => $history['product_id'],
            'Column 6' => $history['ipaddress'],
            'Column 7' => $history['price'],
            'Column 8' => $history['qr_id'],
            'Column 9' => $history['created_at'],
            'Column 10' => $history['updated_at'],
        ];
    }

    public function headings(): array
    {
        // Định nghĩa tiêu đề cột
        return ['ID', 'ID khách hàng', 'Mã QR đã quét', 'Tên sản phẩm','Mã sản phẩm','Địa chỉ IP','Giá sản phẩm','ID QR','Ngày tạo','Ngày cập nhật'];
    }

    public function title(): string
    {
        // Đặt tiêu đề cho bảng dữ liệu
        return 'Danh sách mã quét';
    }
}
