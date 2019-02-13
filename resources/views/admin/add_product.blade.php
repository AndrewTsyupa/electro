@extends('layouts.admin_main')

@section('content')

    <div id="main-container" class="container">
        <h2 class="main-heading text-center">
            Новий продукт
        </h2>
        <form id="form" action="/admin/new" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="inputFname" class="col-sm-3 control-label">Назва товару :</label>
                <div class="col-sm-6">
                    <input id="tovar_name" name="tovar_name" type="text" class="form-control"
                           placeholder="Назва товару">
                </div>
            </div>
            <div class="form-group">

                <label for="inputLname" class="col-sm-3 control-label">Опис :</label>
                <div class="col-sm-6">
                    <input id="opis" name="opis" type="text" class="form-control"
                           placeholder="Опис">
                </div>

            </div>
            <div class="form-group">

                <label for="inputEmail" class="col-sm-3 control-label">Ціна :</label>
                <div class="col-sm-6">
                    <input id="price" name="price" type="text" class="form-control"
                           placeholder="Ціна">
                </div>

            </div>
            <div class="form-group">
                <label for="inputPhone" class="col-sm-3 control-label">Фото :</label>
                <div class="col-sm-6">
                    <input type="file" name="file[]" id="file" multiple class="btn btn-black">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPhone" class="col-sm-3 control-label">Категорія :</label>
                <div class="col-sm-6">
                    <select class="form-control" id="category" name="category" type="text" >
                        @foreach($categorys as $category)
                            <option  value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group bloc-arr"></div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    <button type="submit" name="submit" class="btn btn-black admin-add">
                        <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>
                        Додати Продукт
                    </button>

                    <button type="button" name="button" id="addMore" class="btn btn-black addMore">
                        <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>
                        Додати додаткову властивість
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection