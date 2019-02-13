@extends('layouts.admin_main')

@section('content')

    <div id="main-container" class="container">
        <h2 class="main-heading text-center">
            Нова категорія
        </h2>
        <form id="form" action="/admin/new-category" method="post" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="inputFname" class="col-sm-3 control-label">Назва категорія :</label>
                <div class="col-sm-6">
                    <input id="name" name="name" type="text" class="form-control"
                           placeholder="Назва категорія">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                    <button type="submit" name="submit" class="btn btn-black">
                        <span class="glyphicon glyphicon" aria-hidden="true"></span>
                        Додати Категорію
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection