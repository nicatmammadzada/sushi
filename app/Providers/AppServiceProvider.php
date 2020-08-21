<?php

namespace App\Providers;


use App\Models\Category;
use App\Models\Config;
use App\Models\Dil;
use App\Models\Slider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $categorys = Category::all();
        $config=Config::first();
        $sliders=Slider::all();
        View::composer(['front.layouts.include.header','front.layouts.include.footer', 'back.layouts.include.main-sidebar'], function ($view) use ($categorys,$config,$sliders) {
            $view->with([
                'categorys'=> $categorys,
                'config'=>$config,

            ]);
        });


        $diller = Dil::all();

        View::share([

            'langs' => $diller,
            'sliders'=>$sliders,
        ]);

    }
}
