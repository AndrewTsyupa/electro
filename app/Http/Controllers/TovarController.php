<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderData;
use App\Tovar;
use App\User_Shop;
use App\Values;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TovarController extends Controller
{

    public function getData()
    {

        $products = Tovar::all()->sortBy('id');


        return view('tovar', ['products' => $products]);

    }


    public function productView(Request $request, Response $resp, $id)
    {
        $tovar = Tovar::findOrFail($id);
        $values = Values::where('tovari_id', $id)->get();




        return view('catalog', ['tovar' => $tovar, 'values' => $values]);

    }

    public function order_add(Request $request)
    {
        $this->validate($request, array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'countri' => 'required',
        ));

        $order = new Order();

        $order->first_name = Input::get('first_name');
        $order->last_name = Input::get('last_name');
        $order->email = Input::get('email');
        $order->phone = Input::get('phone');
        $order->adress = Input::get('adress');
        $order->city = Input::get('city');
        $order->postal_code = Input::get('postal_code');
        $order->countri = Input::get('countri');

        if ($order->save()) {
            $korzina = $request->session()->get('корзина', []);
            $total_price_z = 0;


            foreach ($korzina as $product_id => $total) {

                $pr = DB::table('tovari')->where('id', $product_id)->first();
                if ($pr) {
                    $order_data = new OrderData();

                    $price = $pr->price;
                    $total_price_z = $total * $price;
                    $total_price_t = $total * $price;
                    $id = $pr->id;


                    $order_data->tovari_id = $id;
                    $order_data->order_id = $order->id;
                    $order_data->total_price_z = $total_price_z;
                    $order_data->total_price_t = $total_price_t;
                    $order_data->total = $total;

                    $order_data->save();

                }

            }

            $request->session()->remove('корзина');

        }

        return redirect('/');
    }


    public function ordersUser(Request $request)
    {
        $order = DB::table('order')->orderBy('order.id', 'desc')->get();

        return view('orders', ['order' => $order]);
    }

    public function ordersData(Request $request, $id)
    {

        $orders_data = DB::table('order_data')
        ->join('tovari', 'order_data.tovari_id', '=', 'tovari.id')
        ->select('order_data.*', 'tovari.tovar_name', 'tovari.opis', 'tovari.price')
        ->orderBy('order_data.tovari_id', 'desc')
        ->where('order_id', $id)
        ->get();

        $summ = 0;

        foreach ($orders_data as $data) {
            $summ += $data->total_price_t;
        }


        return view('orders_data', ['orders_data' => $orders_data, 'price' => $summ]);
    }


    public function add(Request $request)
    {

        $total = $request->get('total');
        $product_id = $request->get('product_id');

        $korzina = $request->session()->get('корзина');

        $korzina[$product_id] = $total;

        $request->session()->put('корзина', $korzina);
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

        return json_encode(['total' => $summ, 'items' => $totals]);

    }

    public function delete(Request $request)
    {
        $total = $request->get('total');
        $product_id = $request->get('product_id');

        $korzina = $request->session()->get('корзина');

        if ($product_id) {

            unset($korzina[$product_id]);
            $request->session()->put('корзина', $korzina);


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
        }

        return json_encode(['total' => $summ, 'items' => $totals]);
    }


    public function korzina(Request $request)
    {

        $korzina = $request->session()->get('корзина', []);

        if (!$korzina) {
            redirect('/');
        }
        $summ = 0;


        $korsina_all = [];

        foreach ($korzina as $product_id => $total) {

            $pr = DB::table('tovari')->where('id', $product_id)->first();
            if ($pr) {
                $price = $pr->price;

                $summ += $total * $price;
                $sum = $total * $price;

                $image = json_decode($pr->image);

                $korsina_all[] = [
                    'id' => $pr->id,
                    'image' => $image[0],
                    'name' => $pr->id,
                    'quality' => $total,
                    'price' => $price,
                    'sum' => $sum
                ];


            }

        }


        return view('/shoping', ['korsina_all' => $korsina_all, 'summ' => $summ]);

    }

}

?>