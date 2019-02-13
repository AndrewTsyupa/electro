@extends('layouts.admin_main')

@section('content')
    <div id="main-container" class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Редагувати Сторінку</li>
        </ol>

        <h2 class="main-heading text-center">
            Редагувати Сторінку
        </h2>
        <a class="btn btn-black block" href="/admin/new-page">Створити Сторінку</a>


        <div class="table-responsive shopping-cart-table">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Id
                    </td>
                    <td class="text-center">
                        URL
                    </td>
                    <td class="text-center">
                        Title
                    </td>
                    <td class="text-center">
                        Content
                    </td>
                    <td class="text-center">
                        Редагування
                    </td>
                    <td class="text-center">
                        Видалення
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr class="bloc-page">
                        <td class="text-center">
                            {{$page->id}}
                        </td>
                        <td class="text-center">
                            {{$page->url}}
                        </td>
                        <td class="text-center">
                            {{$page->name}}
                        </td>
                        <td class="text-center content">
                            {{$content = str_limit($page->content, 300)}}
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/admin/edit-page/'.$page->id) }}" class="btn btn-black"> Редагувати продукт</a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-delete-page" data-id="{{$page->id}}">
                                Видалити продукт
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