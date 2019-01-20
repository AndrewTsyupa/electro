@extends('layouts.main')

@section('content')

    <div id="main-container" class="container">
        <!-- Breadcrumb Starts -->
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Shopping Cart</li>
        </ol>
        <!-- Breadcrumb Ends -->
        <!-- Main Heading Starts -->
        <h2 class="main-heading text-center">
            Shopping Cart
        </h2>
        <!-- Main Heading Ends -->
        <!-- Shopping Cart Table Starts -->
        <div class="table-responsive shopping-cart-table">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center">
                        Image
                    </td>
                    <td class="text-center">
                        Product Details
                    </td>
                    <td class="text-center">
                        Quantity
                    </td>
                    <td class="text-center">
                        Price
                    </td>
                    <td class="text-center">
                        Total
                    </td>
                    <td class="text-center">
                        Action
                    </td>
                </tr>
                </thead>

                <tbody>

                @foreach ($korsina_all as $row )
                    <tr class="product-row">
                        <td class="text-center">
                            <a href="product.html">
                                <img src="/images/tovar/{{$row['id']}}/{{$row['image']}}" alt="Product Name" title="Product Name" width="250" height="250"
                                     class="img-thumbnail"/>
                            </a>
                        </td>
                        <td class="text-center product_id">
                            {{ $row['name'] }}
                        </td>

                        <td class="text-center">
                            <div class="input-group btn-block">
                                <input type="text" name="total" value="{{$row['quality']}}" size="1"
                                       data-id="{{$row['name']}}" class="form-control total"/>
                            </div>
                        </td>

                        <td class="text-center product_price">
                            {{ $row['price'] }}
                        </td>

                        <td class="text-center product_sum">
                            {{ $row['sum'] }}
                        </td>

                        <td class="text-center">

                            <button type="button" data-id="{{$row['name']}}" class="btn btn-default btn-delete">
                                <i class="fa fa-times-circle"></i>
                            </button>

                        </td>
                        @endforeach
                    </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4" class="text-right">
                        <strong id="summ">Total : $
                            {{$summ}}
                        </strong>
                    </td>
                    <td colspan="2" class="text-left">

                    </td>
                </tr>
                </tfoot>

            </table>
        </div>
        <!-- Shopping Cart Table Ends -->
        <!-- Shipping Section Starts -->
        <!-- Shipping Section Ends -->
        <!-- Shipping Section Starts -->
        <section class="registration-area">
            <div class="row">
                <!-- Shipping & Shipment Block Starts -->
                <div class="col-sm-6">
                    <!-- Taxes Block Starts -->
                    <!-- Taxes Block Ends -->
                    <!-- Shipment Information Block Starts -->
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Shipment Information
                            </h3>
                        </div>
                        <div class="panel-body">
                            <!-- Form Starts -->
                            <form id="form" action="order" method="post" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="hidden" name="product_id" value="15"/>

                                <div class="form-group">
                                    <label for="inputFname" class="col-sm-3 control-label">First Name :</label>
                                    <div class="col-sm-9">
                                        <input id="first_name" name="first_name" type="text" class="form-control"
                                               placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
                                    <div class="col-sm-9">
                                        <input id="last_name" name="last_name" type="text" class="form-control"
                                               placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-3 control-label">Email :</label>
                                    <div class="col-sm-9">
                                        <input id="email" name="email" type="email" class="form-control"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
                                    <div class="col-sm-9">
                                        <input id="phone" name="phone" type="text" class="form-control"
                                               placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress1" class="col-sm-3 control-label">Address/1 :</label>
                                    <div class="col-sm-9">
                                        <input id="adress" name="adress" type="text" class="form-control"
                                               placeholder="Address/1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCity" class="col-sm-3 control-label">City :</label>
                                    <div class="col-sm-9">
                                        <input id="city" name="city" type="text" class="form-control"
                                               placeholder="City">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
                                    <div class="col-sm-9">
                                        <input id="postal_code" name="postal_code" type="text" class="form-control"
                                               placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCountry" class="col-sm-3 control-label">Country :</label>
                                    <div class="col-sm-9">
                                        <input id="countri" name="countri" type="text" class="form-control"
                                               placeholder="Country">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-black btn-add-user-shop">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form Ends -->
                        </div>
                    </div>
                    <!-- Shipment Information Block Ends -->
                </div>
                <!-- Shipping & Shipment Block Ends -->
                <!-- Discount & Conditions Blocks Starts -->
                <div class="col-sm-6">
                    <!-- Total Panel Starts -->
                    <div class="panel panel-smart">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Total
                            </h3>
                        </div>
                        <div class="panel-body">
                            <dl class="dl-horizontal">
                                <dt>Coupon Discount :</dt>
                                <dd>$-0.00</dd>
                                <dt>Subtotal :</dt>
                                <dd class="summ">${{$summ}}</dd>
                                <dt>Payment Fee :</dt>
                                <dd>$0.00</dd>
                                <dt>Shipment Fee :</dt>
                                <dd>$0.00</dd>
                                <dt>Tax Total :</dt>
                                <dd class="summ">${{$summ}}</dd>
                            </dl>
                            <hr/>
                            <dl class="dl-horizontal total">
                                <dt>Total :</dt>
                                <dd class="summ">${{$summ}}</dd>
                            </dl>
                            <hr/>
                            <div class="text-uppercase clearfix">
                                <a href="#" class="btn btn-default pull-left">
                                    <span class="hidden-xs">Continue Shopping</span>
                                    <span class="visible-xs">Continue</span>
                                </a>
                                <a href="#" class="btn btn-default pull-right">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Total Panel Ends -->
                </div>
                <!-- Discount & Conditions Blocks Ends -->
            </div>
        </section>
        <!-- Shipping Section Ends -->
    </div>
    <!-- Main Container Ends -->
    <!-- Footer Section Starts -->
    </div>

@endsection

