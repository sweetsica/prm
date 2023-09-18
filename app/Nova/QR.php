<?php

namespace App\Nova;

use App\Nova\Actions\CreateQRAction;
use Laravel\Nova\Actions\ExportAsCsv;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use Outhebox\NovaHiddenField\HiddenField;


class QR extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\QR::class;

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
        'id', 'specialCode'
    ];


    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Product')->showOnIndex(),
            BelongsTo::make('Promotion')->showOnIndex(),
            Text::make('Code sản phẩm', 'specialCode')->rules('min:0', 'max:12')->showOnIndex()->hideWhenCreating(),
//            HiddenField::make('Code sản phẩm', 'specialCode'),
//            HiddenField::make('Link QR', 'linkQr'),
            Text::make('Link QR', 'linkQr')->showOnIndex()->hideWhenCreating(),
            Boolean::make('Trạng thái', 'status')->sortable(),
            Text::make('Excel', 'excel')->showOnIndex()->hideWhenCreating(),
        ];
    }

    /**
     * @var int[]
     */
    public static $perPageOptions = [50, 100, 500, 1000, 3000, 4000, 5000, 100000];

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

//    public function handle(ActionFields $fields, Collection $models)
//    {
//        foreach ($models as $model) {
//            $model->update(['excel' => 'Active']);
//        }
//        return $models;
//    }

    public function actions(NovaRequest $request)
    {
//        $ids = $request->get('resources');
//        $type = $request->get('action');
//        // Update status excel khi export
//        if($type == 'download-excel' && !empty($ids)) {
//            if($ids == 'all') {
//                self::$model::where('excel','Unactive')->chunkById(50,
//                    function ($qrs) {
//                        foreach ($qrs as $qr) {
//                            self::$model::where('id', $qr->id)->update(['excel' => 'Active']);
//                        }
//                    }
//                );
//            }else{
//                $id_list = explode(",",$ids);
//                self::$model::whereIn('id',$id_list)->chunkById(50,
//                    function ($qrs) {
//                        foreach ($qrs as $qr) {
//                            self::$model::where('id', $qr->id)->update(['excel' => 'Active']);
//                        }
//                    }
//                );
//            }
//        }
//
//        return [
////            new CreateQRAction(),
//            new DownloadExcel()
//        ];
        return [
            ExportAsCsv::make()->nameable(),
        ];
    }

}
