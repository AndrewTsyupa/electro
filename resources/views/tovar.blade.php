@extends('layouts.main')

@section('content')
    <!-- Header Section Ends -->
    <!-- Main Container Starts -->
    <!-- Header Section Ends -->
    <!-- Main Container Starts -->
    <div id="main-container-home" class="container">
        <div class="row">
            <!-- Sidebar Starts -->
            <div class="col-md-3">
                <!-- Categories Links Starts -->
                <h3 class="side-heading">Categories</h3>
                <div class="list-group categories">
                    <a href="category-grid.html" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        Digital Cameras
                    </a>
                    <a href="category-grid.html" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        Sound Devices
                    </a>
                    <a href="category-grid.html" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        Televisions
                    </a>
                    <a href="category-grid.html" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        Computers
                    </a>
                    <a href="category-grid.html" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        Washing Machines
                    </a>
                    <a href="category-grid.html" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        Accessories
                    </a>
                    <a href="category-grid.html" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        Mobile Phones
                    </a>
                </div>

            </div>
            <!-- Sidebar Ends -->
            <!-- Primary Content Starts -->
            <div class="col-md-9">
                <section class="product-carousel">
                    <!-- Products Row Starts -->
                    <div class="row">
                        <div class="col-xs-12">

                            <section class="products-list">
                                <!-- Heading Starts -->
                                <h2 class="product-head">Specials Products</h2>
                                <!-- Heading Ends -->
                                <!-- Products Row Starts -->
                                <div class="row">
                                    <!-- Product #1 Starts -->
                                        @foreach ($products as $product)

                                            <div class="col-md-4 col-sm-6">
                                                <div class="product-col">
                                                    <div class="image">
                                                        <img src="{{$product->getMainImage()}}" alt=""
                                                             class="img-responsive"/>
                                                    </div>
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="{{ url('/product/'.$product->id )}}">{{$product->tovar_name}}</a>
                                                        </h4>
                                                        <div class="description">
                                                            We are so lucky living in such a wonderful time. Our almost
                                                            unlimited
                                                            ...
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">${{$product->price}}</span>
                                                        </div>

                                                        <form id="form" action="add" method="post">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                        <input id="product_id" type="hidden" name="product_id" value="{{ $product->id }}" data-id="1">

                                                            {{--<input type="hidden" name="total" value="{{$product->id}}" size="1" data-id="1" class="form-control total"/>--}}

                                                        <div class="cart-button">
                                                            <button type="button" class="btn btn-cart btn-add-tovar" data-id="{{ $product->id }}" data-id2="1">
                                                                Add to cart
                                                                <i class="fa fa-shopping-cart btn-add"> </i>
                                                            </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                </div>

                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection






