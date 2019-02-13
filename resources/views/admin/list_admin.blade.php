@extends('layouts.admin_main')

@section('content')
    <style>
        .block {
            display: block;
            width: 300px;
            border: none;
            padding: 28px 56px;
            font-size: 32px;
            cursor: pointer;
            text-align: center;
        }

        .hot {
            text-align: center;
        }

        .table {
            align-content: center;
        }
    </style>

    <div id="main-container" class="container">
        <h2 class="main-heading hot">
            Admin Page
        </h2>


        <table class="table table-striped table">
            <tbody>
            <tr>
                <td>
                    <div class="col"><a class="btn btn-black block" href="/orders">Order</a></div>
                </td>
                <td>
                    <div class="col"><a class="btn btn-black block" href="/admin/view">Product</a></div>
                </td>
                <td>
                    <div class="col"><a class="btn btn-black block" href="/admin/list-category">Category</a></div>
                </td>
                <td>
                    <div class="col"><a class="btn btn-black block" href="/admin/list-pages">Page</a></div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection




