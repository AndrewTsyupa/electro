@inject('korzina', 'App\Providers\Korzina')
<div id="cart" class="btn-group btn-block">
    <a href="" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
        <i class="fa fa-shopping-cart"></i>
        <span class="hidden-md">Cart:</span>
        <span id="cart-total">{{$korzina->korsina()}}</span>
        <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu pull-right">
        <li>
            <table class="table hcart">
                @foreach($korzina->cart() as $product)
                    <tr class="product-row">
                        <td class="text-center">
                            <a href="product.html">
                                <img src="/images/tovar/{{$product['id']}}/{{$product['image']}}" alt="image"
                                     title="image" height="100" class="img-thumbnail img-responsive"/>
                            </a>
                        </td>
                        <td class="text-left">
                            <a href="product-full.html">
                                {{$product['tovar_name'] . ' ' . $product['opis']}}
                            </a>
                        </td>
                        <td class="text-right product_item">x{{$product['zagal']}}</td>
                        <td class="text-right product_sum">${{$product['price']}}</td>
                        <td class="text-center">
                            <button type="button" data-id="{{$product['id']}}" class="btn-default btn-delete">
                                <i class="fa fa-times-circle"></i>
                            </button>
                        </td>


                    </tr>
                @endforeach
            </table>
            <table class="table table-bordered total">
                <tbody>
                <td class="text-right"><strong>Total</strong></td>
                <td class="text-left">${{$product['summ']}}</td>
                </tbody>
            </table>
        </li>
    </ul>
</div>