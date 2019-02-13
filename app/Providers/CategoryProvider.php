<?php

namespace App\Providers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class CategoryProvider extends ServiceProvider
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

    public function category()
    {
        $categorys = Category::all();
        return $categorys;
    }

    public function pages()
    {
        $pages = \App\Page::all();

        return $pages;
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
