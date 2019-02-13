<?php

namespace App\Providers;

use App\Tovar;
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

    public function cart()
    {
        $korzina = $this->request->session()->get('корзина', []);
        $summ = 0;
        $totals = 0;
        foreach ($korzina as $key => $value) {
            if ($key) {
                foreach ($korzina as $product_id => $total) {

                    $pr = DB::table('tovari')->where('id', $product_id)->first();
                    if ($pr) {

                        $image_data = json_decode($pr->image);
                        $global[$product_id] =
                            [
                                'id' => $pr->id,
                                'tovar_name' => $pr->tovar_name,
                                'opis' => $pr->opis,
                                'image' => $image_data[0],
                                'price' => $pr->price,
                                'summ' => $summ += $total * $pr->price,
                                'total' => $totals += $total,
                                'zagal' => $total
                            ];
                    }
                }
                return $global;
            }




        }
        $global[] = 0;
        return $global;
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
