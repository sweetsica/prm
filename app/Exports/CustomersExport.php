<?php

namespace App\Exports;

use App\Models\Customer;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class CustomersExport implements FromCollection, WithMapping, WithHeadings, WithTitle, ShouldAutoSize
{

    public function collection()
    {
        $customers = Customer::all();
        return $customers;
    }

    public function map($customer): array
    {
        // Chuyển đổi dữ liệu của từng dòng
        return [
            'Column 1' => $customer['id'],
            'Column 2' => $customer['name'],
            'Column 3' => $customer['phone'],
            'Column 4' => $customer['password'],
            'Column 5' => $customer['email'],
            'Column 6' => $customer['address'],
            'Column 7' => $customer['note'],
            'Column 8' => $customer['totalPoint'],
            'Column 9' => $customer['lastPoint'],
            'Column 10' => $customer['summaryPoint'],
            'Column 11' => $customer['status'],
            'Column 12' => $customer['deleted_at'],
            'Column 13' => $customer['created_at'],
            'Column 14' => $customer['updated_at'],
        ];
    }

    public function headings(): array
    {
        // Định nghĩa tiêu đề cột
        return ['ID', 'Tên khách', 'SĐT', 'Mã hóa','Email','Địa chỉ','Ghi chú','Tổng điểm','Tổng điểm lần cuối','Tổng điểm tới giờ','Trạng thái','Thời gian xóa','Ngày tạo','Ngày cập nhật'];
    }

    public function title(): string
    {
        // Đặt tiêu đề cho bảng dữ liệu
        return 'Danh sách khách hàng';
    }
}
