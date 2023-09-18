<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Customer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Customer::class;

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
        'id','name','phone','address','email','city'
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
            Text::make('Họ tên khách','name'),
            Number::make('Số điện thoại','phone')->readonly(true),
            Password::make('Mật khẩu','password')->hideFromIndex(),
            Text::make('Email')->readonly(true),
            Text::make('Địa chỉ','address')->displayUsing(function ($value) {
                return Str::limit($value, 45,'...');
            }),
            Select::make('Thành phố','city')->options([
                "An Giang"=>"An Giang",
                "Bà Rịa - Vũng Tàu"=>"Bà Rịa - Vũng Tàu",
                "Bắc Giang"=>"Bắc Giang",
                "Bắc Kạn"=>"Bắc Kạn",
                "Bạc Liêu"=>"Bạc Liêu",
                "Bắc Ninh"=>"Bắc Ninh",
                "Bến Tre"=>"Bến Tre",
                "Bình Định"=>"Bình Định",
                "Bình Dương"=>"Bình Dương",
                "Bình Phước"=>"Bình Phước",
                "Bình Thuận"=>"Bình Thuận",
                "Cà Mau"=>"Cà Mau",
                "Cao Bằng"=>"Cao Bằng",
                "Đắk Lắk"=>"Đắk Lắk",
                "Đắk Nông"=>"Đắk Nông",
                "Điện Biên"=>"Điện Biên",
                "Đồng Nai"=>"Đồng Nai",
                "Đồng Tháp"=>"Đồng Tháp",
                "Gia Lai"=>"Gia Lai",
                "Hà Giang"=>"Hà Giang",
                "Hà Nam"=>"Hà Nam",
                "Hà Tĩnh"=>"Hà Tĩnh",
                "Hải Dương"=>"Hải Dương",
                "Hậu Giang"=>"Hậu Giang",
                "Hòa Bình"=>"Hòa Bình",
                "Hưng Yên"=>"Hưng Yên",
                "Khánh Hòa"=>"Khánh Hòa",
                "Kiên Giang"=>"Kiên Giang",
                "Kon Tum"=>"Kon Tum",
                "Lai Châu"=>"Lai Châu",
                "Lâm Đồng"=>"Lâm Đồng",
                "Lạng Sơn"=>"Lạng Sơn",
                "Lào Cai"=>"Lào Cai",
                "Long An"=>"Long An",
                "Nam Định"=>"Nam Định",
                "Nghệ An"=>"Nghệ An",
                "Ninh Bình"=>"Ninh Bình",
                "Ninh Thuận"=>"Ninh Thuận",
                "Phú Thọ"=>"Phú Thọ",
                "Quảng Bình"=>"Quảng Bình",
                "Quảng Ngãi"=>"Quảng Ngãi",
                "Quảng Ninh"=>"Quảng Ninh",
                "Quảng Trị"=>"Quảng Trị",
                "Sóc Trăng"=>"Sóc Trăng",
                "Sơn La"=>"Sơn La",
                "Tây Ninh"=>"Tây Ninh",
                "Thái Bình"=>"Thái Bình",
                "Thái Nguyên"=>"Thái Nguyên",
                "Thanh Hóa"=>"Thanh Hóa",
                "Thừa Thiên Huế"=>"Thừa Thiên Huế",
                "Tiền Giang"=>"Tiền Giang",
                "Trà Vinh"=>"Trà Vinh",
                "Tuyên Quang"=>"Tuyên Quang",
                "Vĩnh Long"=>"Vĩnh Long",
                "Vĩnh Phúc"=>"Vĩnh Phúc",
                "Yên Bái"=>"Yên Bái",
                "Phú Yên"=>"Phú Yên",
                "Tp.Cần Thơ"=>"Tp.Cần Thơ",
                "Tp.Đà Nẵng"=>"Tp.Đà Nẵng",
                "Tp.Hải Phòng"=>"Tp.Hải Phòng",
                "Tp.Hà Nội"=>"Tp.Hà Nội",
                "TP  HCM"=>"TP HCM"
            ]),
            Text::make('Ghi chú','note')->displayUsing(function ($value) {
                return Str::limit($value, 45,'...');
            }),
            Number::make('Điểm thưởng hiện tại','totalPoint')->sortable(),
            Number::make('Tổng điểm tới giờ','summaryPoint')->readonly(true)->sortable(),
            Boolean::make('Trạng thái','status')->readonly(true)->sortable(),
            HasMany::make('Histories'),
            HasMany::make('Orders')
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
        return [
            new DownloadExcel(),
        ];
    }
}
