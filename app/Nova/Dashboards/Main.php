<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\GiftCount;
use App\Nova\Metrics\NewCustomer;
use App\Nova\Metrics\OrderCount;
use App\Nova\Metrics\ProductCount;
use App\Nova\Metrics\QrPerPlan;
use App\Nova\Product;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;
use Coroowicaksono\ChartJsIntegration\StackedChart;

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
        return [new NewCustomer,(new StackedChart())
            ->title('Thống kê khách hàng mới theo tháng')
            ->model('\App\Models\Customer')
            ->options([
                'uom' => 'month',
                'btnRefresh' => true,
                'showPercentage' => true
            ])
            ->width('2/3'), new QrPerPlan,(new StackedChart())
            ->title('Thống kê mã khách hàng đã quét theo tháng')
            ->model('\App\Models\QR')
            ->options([
                'queryFilter'=>array([    // add array of filter with this format
                    'key' => 'status',
                    'operator' => '=',
                    'value' => 0
                ])
            ])
            ->width('2/3'), new OrderCount,new GiftCount,new ProductCount];
    }
}
