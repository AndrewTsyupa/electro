<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class Korzina extends ServiceProvider
{
    public $request;

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

    public function korsina()
    {
        $korzina = $this->request->session()->get('корзина', []);

        $summ = 0;
        $totals = 0;

        foreach ($korzina as $product_id => $total) {

            $pr = DB::table('tovari')->where('id', $product_id)->first();
            if ($pr) {
                $price = $pr->price;
                $summ += $total * $price;
                $totals += $total;


            }
        }

        return "$totals item(s) - \$$summ";
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
