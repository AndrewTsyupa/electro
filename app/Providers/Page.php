<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class Page extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function page()
    {
        $page = Page::all();

        $s = 550;
        return Route::get('/', 'TovarController@getData');

    }



    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
