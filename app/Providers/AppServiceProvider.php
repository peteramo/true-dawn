<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Menu;
use App\Models\Notifications;
use App\Models\Overall;
use App\Models\Pages\Contact;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function(){
            return base_path() . '/public_html';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        View::share('menus_items',Menu::where('men_active',1)->orderBy('id')->get());
        View::share('over_alls',Overall::where('id',1)->first());
        View::share('set_things',Setting::where('id',1)->first());
        View::share('con_facts',Contact::where('id',1)->first());
        View::share('foo_fighter',Footer::where('id',1)->first());
        View::share('note_fication',Notifications::where('id',1)->first());
    }
}
