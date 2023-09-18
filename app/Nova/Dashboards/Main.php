<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewCustomer;
use App\Nova\Metrics\OrderCount;
use App\Nova\Metrics\QrPerPlan;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            NewCustomer::make(),
            OrderCount::make(),
            QrPerPlan::make(),

        ];
    }
}
