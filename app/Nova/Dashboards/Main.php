<?php

namespace App\Nova\Dashboards;

use App\Models\Customer;
use App\Models\Order;
use App\Nova\Metrics\GiftCount;
use App\Nova\Metrics\NewCustomer;
use App\Nova\Metrics\OrderCount;
use App\Nova\Metrics\ProductCount;
use App\Nova\Metrics\QrPerPlan;
use App\Nova\Product;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;
use Coroowicaksono\ChartJsIntegration\StackedChart;
use Coroowicaksono\ChartJsIntegration\PieChart;
use Coroowicaksono\ChartJsIntegration\DoughnutChart;
use Coroowicaksono\ChartJsIntegration\AreaChart;
class Main extends Dashboard
{
    public function name(){
        return "Trang thống kê";
    }

    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            (new PieChart())
                ->title('Thống kê khách hàng')
                ->series(array([
                    'data' => [count(Customer::all()), 0,0],
                    'backgroundColor' => ["#ffcc5c","#91e8e1","#ff6f69","#88d8b0","#b088d8","#d8b088", "#88b0d8", "#6f69ff"],
                ]))
                ->options([
                    'xaxis' => [
                        'categories' => ['Khách hàng mới','Khách hàng cũ', 'Khách hàng nội bộ']
                    ],
                ])->width('1/3')
            ,new QrPerPlan, new OrderCount,(new DoughnutChart())
                ->title('Thống kê đơn hàng')
                ->series(array([
                    'data' => [count(Order::where('status',"Đang xử lý")->get()), count(Order::where('status',"Đang chuẩn bị hàng")->get()), count(Order::where('status',"Đã xuất kho")->get()),  count(Order::where('status',"Đang giao")->get()), count(Order::where('status',"Hoàn tất")->get())],
                    'backgroundColor' => ["#ffcc5c","#91e8e1","#ff6f69","#b088d8","#88d8b0"],
                ]))
                ->options([
                    'xaxis' => [
                        'categories' => ['Đang xử lý','Đang chuẩn bị','Đã xuất kho','Đang giao','Hoàn tất']
                    ],
                ])->width('1/3')
            ,(new StackedChart())
            ->title('Thống kê mã khách hàng đã quét theo tháng')
            ->model('\App\Models\QR')
            ->options([
                'queryFilter'=>array([    // add array of filter with this format
                    'key' => 'status',
                    'operator' => '=',
                    'value' => 0
                ])
            ])
            ->width('2/3'),new GiftCount

            ,new ProductCount];
    }
}
