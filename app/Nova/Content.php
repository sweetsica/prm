<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Murdercode\TinymceEditor\TinymceEditor;

class Content extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Content>
     */
    public static $model = \App\Models\Content::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            Text::make('Tiêu đề','typeContent'),
            Text::make('Đường dẫn ảnh','urlContent'),
            TinymceEditor::make(__('Chi tiết'), 'descriptionContent')
                ->help(__('Nội dung trang')),
//            Text::make('Chi tiết','descriptionContent'),

            Text::make('Link phụ','linkContent'),
//            Text::make('Vị trí','positionContent'),
            Select::make('Vị trí','positionContent')
                ->options([
                    'banner_slide_1' => ['label' => 'Banner Slide 1', 'group' => 'Banner Slide'],
                    'banner_slide_2' => ['label' => 'Banner Slide 2', 'group' => 'Banner Slide'],
                    'banner_slide_3' => ['label' => 'Banner Slide 3', 'group' => 'Banner Slide'],
                    'banner_slide_side_1' => ['label' => 'Banner Slide Side 1', 'group' => 'Banner Slide'],
                    'banner_slide_side_2' => ['label' => 'Banner Slide Side 2', 'group' => 'Banner Slide'],
                    'banner_uudiem_1' => ['label' => 'Banner Ưu điểm 1', 'group' => 'Banner phụ Ưu điểm'],
                    'banner_uudiem_2' => ['label' => 'Banner Ưu điểm 2', 'group' => 'Banner phụ Ưu điểm'],
                    'banner_uudiem_3' => ['label' => 'Banner Ưu điểm 3', 'group' => 'Banner phụ Ưu điểm'],
                    'banner_uudiem_4' => ['label' => 'Banner Ưu điểm 4', 'group' => 'Banner phụ Ưu điểm'],
                    'banner_vuong' => ['label' => 'Banner Vuông', 'group' => 'Banner Vuông'],
                    'banner_mota_1' => ['label' => 'Banner Mô tả 1', 'group' => 'Banner Mô tả'],
                    'banner_mota_2' => ['label' => 'Banner Mô tả 2', 'group' => 'Banner Mô tả'],
                    'banner_mota_3' => ['label' => 'Banner Mô tả 3', 'group' => 'Banner Mô tả'],
                    'banner_nhomsp_1' => ['label' => 'Nhóm sản phẩm 1', 'group' => 'Banner Nhóm sản phẩm'],
                    'banner_nhomsp_2' => ['label' => 'Nhóm sản phẩm 2', 'group' => 'Banner Nhóm sản phẩm'],
                    'banner_nhomsp_3' => ['label' => 'Nhóm sản phẩm 3', 'group' => 'Banner Nhóm sản phẩm'],
                    'banner_qc_1' => ['label' => 'Banner Ưu điểm 4', 'group' => 'Banner Quảng cáo'],
                    'banner_qc_2' => ['label' => 'Banner Ưu điểm 4', 'group' => 'Banner Quảng cáo'],
                    'banner_qc_3' => ['label' => 'Banner Ưu điểm 4', 'group' => 'Banner Quảng cáo'],
                    'banner_qc_4' => ['label' => 'Banner Ưu điểm 4', 'group' => 'Banner Quảng cáo'],
                    'thongtin_chantrang1' => ['label' => 'Thông tin chân trang 1', 'group' => 'Thông tin trang'],
                    'thongtin_chantrang2' => ['label' => 'Thông tin chân trang 2', 'group' => 'Thông tin trang'],
                ])->default('Chờ xử lý'),
            Text::make('Mã nhúng','shortcodeContent'),
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
