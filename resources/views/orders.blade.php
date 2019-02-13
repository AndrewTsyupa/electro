@extends('layouts.admin_main')

@section('content')

    <div id="main-container" class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Order</li>
        </ol>

        <h2 class="main-heading text-center">
            Замовлення
        </h2>

        <div class="table-responsive shopping-cart-table">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Id
                    </td>
                    <td class="text-center">
                        Ім'я замовника
                    </td>
                    <td class="text-center">
                        Загальна вартість
                    </td>
                    <td class="text-center">
                        Пошта
                    </td>
                    <td class="text-center">
                        Телефон
                    </td>
                    <td class="text-center">

                    </td>

                </tr>
                </thead>
                <tbody>
                @foreach($order as $ord)
                    <tr>
                        <td class="text-center">
                            {{$ord->id}}
                        </td>
                        <td class="text-center">
                            {{$ord->first_name}} {{$ord->last_name}}
                        </td>
                        <td class="text-center">
                            {{$ord->email}}
                        </td>
                        <td class="text-center">
                            {{$ord->phone}}
                        </td>
                        <td class="text-center">
                            {{$ord->adress}}
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/orders/'.$ord->id) }}" class="btn btn-black">
                                Куплені товари
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
            </table>
        </div>

    </div>

@endsection




