@extends('layouts.admin_main')
@section('content')

    <div id="main-container" class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Order Data</li>
        </ol>

        <h2 class="main-heading text-center">
            Детальна інформація Замовлення
        </h2>

        <div class="table-responsive shopping-cart-table">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Id
                    </td>
                    <td class="text-center">
                        Код товару
                    </td>
                    <td class="text-center">
                        Код замовника
                    </td>
                    <td class="text-center">
                        Назва продукту
                    </td>
                    <td class="text-center">
                       Опис
                    </td>
                    <td class="text-center">
                        Кількість продуктів
                    </td>
                    <td class="text-center">
                        Ціна одиниці товару
                    </td>
                    <td class="text-center">
                        Загальна ціна одиниці товару
                    </td>
                    <td class="text-center">
                        Дата додання
                    </td>

                </tr>
                </thead>
                <tbody>
                @foreach($orders_data as $ord)
                    <tr>
                        <td class="text-center">
                            {{$ord->id}}
                        </td>
                        <td class="text-center">
                            {{$ord->tovari_id}}
                        </td>
                        <td class="text-center">
                            {{$ord->order_id}}
                        </td>
                        <td class="text-center">
                            {{$ord->tovar_name}}
                        </td>
                        <td class="text-center">
                            {{$ord->opis}}
                        </td>
                        <td class="text-center">
                            {{$ord->total}}
                        </td>
                        <td class="text-center">
                            {{$ord->price}}
                        </td>
                        <td class="text-center">
                            {{$ord->total_price_z}}
                        </td>
                        <td class="text-center">
                            {{$ord->created_at}}
                        </td>

                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="9" class="text-right">
                        <strong>Total : $
                           {{ $price}}
                        </strong>
                    </td>

                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection


