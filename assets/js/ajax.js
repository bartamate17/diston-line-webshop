$(function () {

    //Product Card
    function showProducts(id, name, description, price, img) {
        $("#productsAll").append(
            "<div class=col-lg-4 col-md-6>" +
            "<div id=" + id + " class=member>" +
            "<a href=\"#\" onClick=\"return false;\" style=\"color:#2d6760; margin: 20px; padding: 30px; text-transform: uppercase;\" " +
            "data-role=update data-id=" + id + " data-price=" + price + ">Szerkesztés</a>" +
            "<a href=\"#\" onClick=\"return false;\" class=link-danger style=\"margin: 20px; padding: 30px; text-transform: uppercase;\" data-role=delete data-id=" + id + ">Törlés</a>" +
            "<img src=" + img + " alt=" + name + ">" +
            "<h4 id=productName data-target=" + name + ">" + name + "</h4>" +
            "<p>" + description + "</p>" +
            "<div class=price>" +
            "<b style=\"color:#f06730\">Online bruttó ár:</b>" +
            "<h4>" + String(price).replace(/(.)(?=(\d{3})+$)/g, '$1 ') + " Ft </h4>" +
            "</div>" +
            "<div class=text-center>" +
            "</div>" +
            "</div>" +
            "</div>"
        );
    }

    //Form data handling function
    function getFormData($form) {
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function (n, i) {
            indexed_array[n['name']] = n['value'];
        });

        return indexed_array;
    }

    //Press Update button
    $(document).on('click', 'a[data-role=update]', function () {

        var id = $(this).data('id');
        var name = $('#' + id).children()[3].firstChild.data;
        var price = $(this).data('price');
        var description = $('#' + id).children()[4].outerText;

        $('#idEditProduct').val(id);
        $('#nameEditProduct').val(name);
        $('#priceEditProduct').val(price);
        $('#descriptionEditProduct').val(description);
        $("#getCodeModal").modal('show');
    });

    //Press Delete button
    $(document).on('click', 'a[data-role=delete]', function () {
        var id = $(this).data('id');
        $('#idDeleteProduct').val(id);
        $("#deleteCodeModal").modal('show');
    });

    //Get products list
    $.ajax({
        url: "api.php/products",
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            if (res.length != 0) {
                var i = 0;
                $.each(res, function () {

                    if (res[i].description == null) {
                        res[i].description = "";
                    }

                    showProducts(
                        res[i].id,
                        res[i].name,
                        res[i].description,
                        res[i].price,
                        res[i].img
                    );
                    i++;
                })
            } else {
                $('#productsAll').append("<h2 style='text-align: center; color: #f06730'>Jelenleg nincs elérhető termék.</h2>");
            }
        }
    });

    //Create product
    $('#createProduct').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'api.php/products',
            data: JSON.stringify(getFormData($('#createProduct'))),
            dataType: 'json',
            contentType: 'application/json;charset=UTF-8',
            success: function () {
                $("#getCodeModal").modal('show');

                setTimeout(function () {
                    location.href = "index.php";
                }, 4000);
            }
        });
    });

    //Update product
    $('#save').click(function () {

        var idEdit = $('#idEditProduct').val();
        var nameEdit = $('#nameEditProduct').val();
        var priceEdit = $('#priceEditProduct').val();
        var descEdit = $('#descriptionEditProduct').val();

        $.ajax({
            type: 'PUT',
            url: 'api.php/products/' + idEdit,
            data: JSON.stringify({name: nameEdit, price: priceEdit, description: descEdit}),
            dataType: 'json',
            contentType: 'application/json;charset=UTF-8',
            success: function () {
                $("#getCodeModal").modal('hide');
                $("#getSuccesModal").modal('show');

                setTimeout(function () {
                    location.href = "index.php";
                }, 4000);
            }
        });
    })

    //Delete products
    $('#deleteProduct').click(function () {

        var idDelete = $('#idDeleteProduct').val();

        $.ajax({
            type: 'DELETE',
            url: 'api.php/products/' + idDelete,
            data: JSON.stringify({id: idDelete}),
            dataType: 'json',
            contentType: 'application/json;charset=UTF-8',
            success: function () {
                $("#deleteCodeModal").modal('hide');
                $("#getSuccesModal").modal('show');

                setTimeout(function () {
                    location.href = "index.php";
                }, 4000);
            }
        });
    })
});