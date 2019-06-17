<?php

namespace App\Providers;
use TCG\Voyager\Facades\Voyager;
use App\FormFields\Family;
use App\FormFields\Conditional;
use App\FormFields\Escala;
use App\FormFields\JSON;
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
        Voyager::addFormField(Family::class);
        Voyager::addFormField(Conditional::class);
        Voyager::addFormField(Escala::class);
        Voyager::addFormField(JSON::class);
        Voyager::useModel('DataType', \App\DataType::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
