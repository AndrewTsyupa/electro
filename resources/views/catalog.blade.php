@extends('layouts.main')
@section('content')

    <style>
        .w250 li:hover {
            background-color: yellow;
        }
        .w250 li > span {
            min-width: 250px!important;
        }
    </style>

    <div id="main-container" class="container">
        <div class="row">

            <div class="col-md-12">
                <!-- Breadcrumb Starts -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="category-grid.html">Category</a></li>
                    <li class="active">Tovar {{$tovar->id}}</li>
                </ol>
                <!-- Breadcrumb Ends -->
                <!-- Product Info Starts -->
                <div class="row product-info">
                    <!-- Left Starts -->
                    <div class="col-sm-4 images-block">
                        <p>
                            <img src="{{$tovar->getMainImage() }}" alt="Image"
                                 class="img-responsive thumbnail">
                        </p>

                    </div>
                    <!-- Left Ends -->
                    <!-- Right Starts -->
                    <div class="col-sm-7 product-details">
                        <div class="panel-smart">
                            <!-- Product Name Starts -->
                            <h2>{{ $tovar->tovar_name . ' ' . $tovar->opis}}</h2>
                            <!-- Product Name Ends -->
                            <hr/>
                            <!-- Manufacturer Starts -->

                            <ul class="list-unstyled manufacturer w250">

                                @foreach($tovar->values as $val)
                                    <li>
                                        <span class="price">{{$val->name}}:</span> {{$val->value}}
                                    </li>
                                @endforeach
                                <li>
                                    <span>Availability:</span> <strong class="label label-success">Out Of Stock</strong>
                                </li>
                            </ul>
                            <!-- Manufacturer Ends -->
                            <hr/>
                            <!-- Price Starts -->
                            <div class="price">
                                <span class="price-head">Price :</span>
                                <span class="price-new">${{ $tovar->price }}</span>
                            </div>
                            <hr/>

                            <form id="form" action="add" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input id="product_id" type="hidden" name="product_id" value="{{ $tovar->id }}">

                                <div class="form-group">
                                    <label class="control-label text-uppercase" for="input-quantity">Sum :</label>
                                    <input id="total" type="text" name="total" value="1" size="1" class="form-control"/>
                                </div>

                                <div class="caption">
                                    <div class="cart-button">
                                        <button type="button" name="submit" class="btn btn-cart btn-add">
                                            Add to cart
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection