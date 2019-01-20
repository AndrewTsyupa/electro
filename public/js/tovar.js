$(document).ready(function () {

    $(".addMore").click(function () {

        var id = Date.now();

        $(".bloc-arr").before(
            '<div class="form-group bloc-new">' +
            '<label for="inputEmail" class="col-sm-3 control-label">Додаткові всластивості:</label>' +
            '<div class="col-sm-6">' +
            '<input type="text" name="value[' + id + '][name]" id="name" class="form-control" placeholder="Назва властивості"/>' +
            '<input type="text" name="value[' + id + '][value]" id="value" class="form-control" placeholder="Властивість"/>' +
            '<div class="input-group-addon">' +
            '<button type="button" class="btn btn-danger remove">Видалити</button>' +
            '</div>' + '</div>' + '</div>');

        $(document).on('click', '.remove', function () {
            $(this).parents('.bloc-new').remove();
        });

    })
});

$(document).on('click', '.remove-value', function () {
    var element = $(this);
    $.ajax({
        url: '/delete-values',
        dataTyp: 'json',
        cache: false,
        data: {
            id: $('.value-id').data('id'),
        }
    }).done(function () {
        $(element).parents('.edit-block').remove();
        $(element).parents('.labels').remove();
    });
});

$(document).on('click', '.btn-delete-product', function () {
    var element = $(this);
    $.ajax({
        url: '/delete-product',
        dataType: 'json',
        cache: false,
        data: {
            productid: $(element).data('id')
        }
    }).done(function () {
        $(element).parents('.bloc-product').remove();
    });


});

$(document).on('click', '.remove-image', function () {
    var element = $(this);
    $.ajax({
        url: '/update-image',
        dataType: 'json',
        cache: false,
        data: {
            id: $('#image').data('id'),
            image: $('#image').data('id2'),
        }

    }).done(function () {
        $(element).parents('.block-photo').remove();
        $(element).parents('.photo-label').remove();
    });

});


$(document).on('click', '.btn-delete', function () {
    var element = $(this);
    $.ajax({
        url: '/delete',
        dataType: 'json',
        cache: false,
        data: {
            product_id: $(this).data('id')
        },
        success: function (data) {
            $('#cart-total').html(data.items + ' item(s) - $' + data.total)
        }

    }).done(function () {
        $(element).parents('.product-row').remove();

    });
});


$(document).on('click', '.btn-add-user-shop', function () {
    alert('Успішно опрацьоване замовлення');
});

$(document).on('click', '.btn-add-tovar', function () {
    var element = $(this);
    $.ajax({
        url: '/add',
        dataType: 'json',
        cache: false,
        data: {
            product_id: $(element).data('id'),
            total: $(element).data('id2')
        }
    }).done(function () {
        korzina();


    });


});

function korzina() {
    $.ajax({
        url: '/add',
        dataType: 'html',
        cache: false,
        data: {
            product_id: $('#product_id').val(),
            total: $('#total').val(),

        },
        success: function (data) {
            $('#korzina-dropdown').html(data);
        }

    });
}

$(document).on('click', '.btn-add', function () {
    korzina();
});

$('.total').on('change', function () {
    var element = $(this);
    $.ajax({
        url: '/addForOrder',
        dataType: 'json',
        cache: false,
        data: {
            product_id: $(this).data('id'),
            total: $(this).val(),

        },
        success: function (data) {
            korzina();
            // $('#cart-total').html(data.items + ' item(s) - $' + data.total);
            $('#summ').html('Total : $' + data.total);
            $('.summ').html('$' + data.total);
            $('.product_sum').html();

            $.each($('.product-row'), function (index, el) {
                var price = ($(el).find('.product_price').text().trim());
                var totals = ($(el).find('.total').val());

                var summ = ($(el).find('.product_sum'));

                $(summ).text(price * totals);


            });
        }

    });
});
