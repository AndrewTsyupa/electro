@extends('layouts.admin_main')

@section('content')

    <div id="main-container" class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Edit Product</li>
        </ol>

        <h2 class="main-heading text-center">
            едагування Категорії
        </h2>
       <a class="btn btn-black block" href="/admin/new-category">Створити Категорію </a>

        <div class="table-responsive shopping-cart-table">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Id
                    </td>
                    <td class="text-center">
                        Назва Категорії
                    </td>
                    <td class="text-center">
                        Редагування Категорії
                    </td>

                    <td class="text-center">
                        Видалення
                    </td>

                </tr>
                </thead>
                <tbody>
                @foreach($categorys as $category)
                    <tr class="bloc-category">
                        <td class="text-center ">
                            <p class="productid" data-id="{{$category->id}}">{{$category->id}}</p>
                        </td>
                        <td class="text-center name_category" id="name_category">
                            {{$category->name}}
                        </td>

                        {{--<td class="text-center">--}}
                            {{--<input type="text" name="category_name" value="{{$category->name}}"--}}
                                   {{--data-id="{{$category->id}}"--}}
                                   {{--class="form-control category_name">--}}
                        {{--</td>--}}
                        <td class="text-center">
                            <a href="{{ url('/admin/edit/'.$category->id) }}" class="btn btn-black">
                                Редагувати продукт
                            </a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-delete-category" data-id="{{$category->id}}">
                                Видалити категорію
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
            </table>
        </div>

    </div>

@endsection