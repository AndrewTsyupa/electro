@extends('layouts.main')

@section('content')

    <div id="main-container" class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Edit Product</li>
        </ol>

        <h2 class="main-heading text-center">
            Edit Product
        </h2>

        <div class="table-responsive shopping-cart-table">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Id
                    </td>
                    <td class="text-center">
                        Назва товару
                    </td>
                    <td class="text-center">
                        Ціна
                    </td>
                    <td class="text-center">
                        Фото
                    </td>
                    <td class="text-center">

                    </td>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="bloc-product">
                        <td class="text-center " >
                            <p class="productid" data-id="{{$product->id}}">{{$product->id}}</p>
                        </td>
                        <td class="text-center">
                            {{$product->tovar_name}} {{$product->opis}}
                        </td>
                        <td class="text-center">
                            {{$product->price}}
                        </td>
                        <td class="text-center">
                            <img src="{{$product->getMainImage()}}" alt="" width="300" height="300"
                                 class="img-responsive"/>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/admin/edit/'.$product->id) }}" class="btn btn-black">
                                Редагувати продукт
                            </a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-delete-product" data-id="{{$product->id}}">Видалити продукт</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
            </table>
        </div>

    </div>


@endsection