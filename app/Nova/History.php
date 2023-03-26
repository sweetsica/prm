<?php

namespace App\Nova;

use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Models\QR;
use App\Models\Product;
use App\Models\Customer;

class History extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\History::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'qr_specialCode','customer_id'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Id người dùng','customer_id'),
            Text::make('Tên', function($model) {
                $name_customer = Customer::where('id', '=', $model->customer_id)->first()->name;
                return $name_customer;
            }),
            Text::make('Mã QR','qr_specialCode'),
//            Text::make('Sản phẩm', function($model) {
//                $product_id = QR::where('id', '=', $model->qr_id)->first()->product_id;
//                $product_name = Product::where('id','=',$product_id)->first()->name;
//                return $product_name;
//            }),
            Text::make('Sản phẩm','product_name'),
            DateTime::make('Ngày quét','updated_at'),
            Text::make('Ip','ipaddress'),
            Text::make('Giá','price'),
            Text::make('Id QR','qr_id')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
