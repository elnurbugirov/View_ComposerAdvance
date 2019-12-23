<?php

namespace App\Providers;

use App\Channel;
use App\Http\View\Composers\ChannelComposers;
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
//        Option 1 - Every single view
//        View::share('channels',Channel::orderBy('name')->get());

//        Option 2 - Granular views with wildcards
//        View::composer(['post.*','channel.index'],function($view){
//            $view->with('channels',Channel::orderBy('name')->get());
//        });

        //Dedicated class
        View::composer('partials.channels.*',ChannelComposers::class);
    }
}
