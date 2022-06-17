<?php

namespace App\Nova\Metrics;


use App\Models\Product;
use App\Models\QR;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

class ProductCount extends Value
{
    public function name(){
        return "Thống kê sản phẩm";
    }

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->result(Product::count());
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
//    public function ranges()
//    {
//
//    }

    /**
     * Determine the amount of time the results of the metric should be cached.
     *
     * @return \DateTimeInterface|\DateInterval|float|int|null
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'product-count';
    }
}
