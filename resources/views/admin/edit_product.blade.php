@extends('layouts.main')

@section('content')
    <div id="main-container" class="container">
        <h2 class="main-heading text-center">
            Редагування продукту
        </h2>

        <form id="form" action="/admin/edit/{{ $tovar->id }}" method="post" class="form-horizontal"
              enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="inputFname" class="col-sm-3 control-label">Назва товару :</label>
                <div class="col-sm-6">
                    <input id="tovar_name" name="tovar_name" type="text" class="form-control "
                           value="{{$tovar->tovar_name}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputLname" class="col-sm-3 control-label">Опис :</label>
                <div class="col-sm-6">
                    <input id="opis" name="opis" type="text" class="form-control" value="{{$tovar->opis}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-3 control-label">Ціна :</label>
                <div class="col-sm-6">
                    <input id="price" name="price" type="text" class="form-control" value="{{$tovar->price}}">
                </div>


            </div>
            @foreach($tovar->image as $image)
                <div class="form-group block-photo">
                    <label for="inputPhone" class="col-sm-3 control-label photo-label">Фото :</label>
                    <div class="col-sm-6">
                        <img id="image" src="/images/tovar/{{$tovar->id}}/{{$image}}"
                             class="img-responsive" name="image" data-id2="{{$image}}" data-id="{{$tovar->id}}"/>
                        <div class="input-group-addon">
                            <button type="button" class="btn btn-danger remove-image">Видалити фото</button>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="form-group">
                <label for="inputPhone" class="col-sm-3 control-label">Додати фото :</label>
                <div class="col-sm-6">
                    <input type="file" name="file[]" id="file" multiple  class="btn btn-black">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPhone" class="col-sm-3 control-label">Категорія :</label>
                <div class="col-sm-6">
                    <select class="form-control" id="category" name="category" type="text" >
                        @foreach($category as $categor)
                            <option value="{{$categor->id}}">{{$categor->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @foreach($tovar->values as $val)
                <div class="form-group edit-block">
                    <label for="inputEmail" class="col-sm-3 control-label labels" id="labels">Властивість:{{$val->id}} </label>
                    <div class="col-sm-6">
                        <input type="text" id="name" name="value[{{$val->id}}][name]" data-id="{{$val->id}}" class="form-control value-id"
                               value="{{$val->name}}"/>
                        <input type="text" id="value" name="value[{{$val->id}}][value]" class="form-control value-name"
                               value="{{$val->value}}"/>
                        <div class="input-group-addon">
                            <button type="button" class="btn btn-danger remove-value">Видалити</button>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="form-group bloc-arr"></div>

            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="button" name="button" id="addMore" class="btn btn-black addMore">
                        Додати додаткову властивість
                    </button>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-black admin-add">
                        Редагувати Продукт
                    </button>
                </div>
            </div>


        </form>


    </div>
@endsection