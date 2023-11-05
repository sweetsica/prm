<?php

namespace App\Providers;

use App\Nova\Pagecontent;
use App\Nova\Content;
use App\Nova\Gift;
use App\Nova\Category;
use App\Nova\Customer;
use App\Nova\Help;
use App\Nova\History;
use App\Nova\Order;
use App\Nova\Product;
use App\Nova\Promotion;
use App\Nova\QR;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;


class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),
                MenuSection::make('Người dùng', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Customer::class),
                    MenuItem::resource(Order::class),
                    MenuItem::resource(Help::class),
                ])->icon('user-group')->collapsable(),

                MenuSection::make('Sản phẩm', [
                    MenuItem::resource(Product::class),
                    MenuItem::resource(Category::class),
                    MenuItem::resource(Gift::class),
                ])->icon('folder-open')->collapsable(),

                MenuSection::make('Kỹ thuật', [
                    MenuItem::resource(Promotion::class),
                    MenuItem::resource(QR::class),
                    MenuItem::resource(History::class),
                    MenuItem::resource(Content::class),
                    MenuItem::resource(Pagecontent::class),
                ])->icon('lightning-bolt')->collapsable(),

                MenuSection::make('Chức năng', [
                    MenuItem::externalLink('Xuất khách hàng',route('customer.export')),
//                    MenuItem::externalLink('Xuất lịch sử',route('history.export')),
                    MenuItem::externalLink('Xuất lịch sử',route('history.export')),
                    MenuItem::externalLink('Demo - Đừng có bấm vào', route('qr.export', ['startid' => 1, 'endid' => 100])),
                ])->icon('lightning-bolt')->collapsable(),

            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
