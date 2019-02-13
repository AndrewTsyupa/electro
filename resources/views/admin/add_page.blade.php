@extends('layouts.admin_main')

@section('content')

    <div id="main-container" class="container">
        <h2 class="main-heading text-center">
            Нова Сторінка
        </h2>
        <form id="form" action="/admin/new-page" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="inputFname" class="col-sm-3 control-label">URL директорії :</label>
                <div class="col-sm-6">
                    <input id="url" name="url" type="text" class="form-control" placeholder="URL Сторінки ">
                </div>
            </div>

            <div class="form-group">
                <label for="inputFname" class="col-sm-3 control-label">Назва Сторінки :</label>
                <div class="col-sm-6">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Назва Сторінки">
                </div>
            </div>

            <div class="form-group">
                <label for="inputFname" class="col-sm-3 control-label">Контент Сторінки :</label>
                <div class="col-sm-6">
                    <textarea id="summernote" name="content" type="text" class="form-control" placeholder="Контент Сторінки" rows="5"></textarea>
                    <script>
                        $(document).ready(function() {
                            $('#summernote').summernote();
                        });
                    </script>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="submit" name="submit" class="btn btn-black">
                        <span class="glyphicon glyphicon" aria-hidden="true"></span>
                        Додати Сторінку
                    </button>
                </div>
            </div>

        </form>
    </div>

@endsection