<?php

namespace App\Nova\Metrics;

use App\Models\QR;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class QrPerPlan extends Partition
{
    public function name()
    {
        return 'Thống kê mã QR';
    }

    /**
     * Calculate the value of the metric.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->count($request, QR::class, 'status')->label(fn($value) => match ($value) {
            null => 'None',
            1 => ucfirst('Số mã chưa quét'),
            0 => ucfirst('Số mã đã quét')
        });
    }

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
        return 'qr-per-plan';
    }
}
