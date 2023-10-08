<?php

namespace App\Nova\Filters;

use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;
use PHPUnit\Framework\Error;

class OrderStatus extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
//        Log::debug($value);
        try {
            return $query->where('status', $value)->orderBy('id','DESC')->limit(100);
        }catch (\Exception $e){
            dd ($e);
            return false;
        }
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        return [
            'Đang xử lý' => 'Đang xử lý',
            'Đang chuẩn bị hàng' => 'Đang chuẩn bị hàng',
            'Đã xuất kho' => 'Đã xuất kho',
            'Đang giao' => 'Đang giao',
            'Giao thành công' => 'Giao thành công',
//            'Đang xử lý' => 'Äang xá»­ lÃ½',
//            'Đang chuẩn bị hàng' => 'Äang chuáº©n bá»‹ hÃ ng',
//            'Đã xuất kho' => 'ÄÃ£ xuáº¥t kho',
//            'Đang giao' => 'Äang giao',
//            'Giao thành công' => 'Giao thÃ nh cÃ´ng',
        ];
    }
}
