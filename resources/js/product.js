$(document).ready(function() {
    // Data Table
    $('#example').DataTable();

    $('#bill_example').DataTable();

    $('#purchase_example').DataTable();

    $('#purchase_view_example').DataTable();

    // Product Purchase
    $('body').on('click','#add_bill', function(e){
        e.preventDefault();
        $(".new_bill_section").append(
            `<div class="pb-2 col-6">
                <input type="text" name="product_id" id="product_id" class="form-control" placeholder="Product ID" value="">
                <span class='text-danger d-none product_span'>The product id field is required.</span>
            </div>
            <div class="pb-2 col-6">
                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" value="">
                <span class='text-danger d-none qty_span'>The quantity field is required.</span>
            </div>`);
    })


    $('body').on('click','.bill_generate_btn', function(e){
        e.preventDefault();
        var email = $('#email_id').val();
        var cash = $('#cash').val();

        if (email == '') {
            $('#email_id').addClass('is-invalid');
            $('.email_span').addClass('d-block').removeClass('d-none');
        } else {
            $('#email_id').removeClass('is-invalid');
            $('.email_span').addClass('d-none').removeClass('d-block');
        }

        if (cash == '') {
            $('#cash').addClass('is-invalid');
            $('.price_span').addClass('d-block').removeClass('d-none');
        } else {
            $('#cash').removeClass('is-invalid');
            $('.price_span').addClass('d-none').removeClass('d-block');
        }

        var product_id = [];
        $("input[name='product_id']").each(function() {
            if ($(this).val() == '') {
                $(this).addClass('is-invalid');
                $(this).next('.product_span').addClass('d-block').removeClass('d-none');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('.product_span').addClass('d-none').removeClass('d-block');
            }
            if($(this).val() != '') {
                product_id.push($(this).val());
            }
        });
        var quantity = [];
        $("input[name='quantity']").each(function() {
            if ($(this).val() == '') {
                $(this).addClass('is-invalid');
                $(this).next('.qty_span').addClass('d-block').removeClass('d-none');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('.qty_span').addClass('d-none').removeClass('d-block');
            }
            if($(this).val() != '') {
                quantity.push($(this).val());
            }
        });

        if (email != '' && cash != '' & product_id != [] && quantity != [] && product_id.length == quantity.length) {
            $.ajax({
                type: "POST",
                url: "/purchase",
                data: {
                    'email' : email,
                    'cash'  : cash,
                    'product_id' : product_id,
                    'quantity'   : quantity,
                },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            }).done(function (response) {
                console.log('Success');
                window.location.href = '/purchase-bill';
            }).fail(function (error) { console.log(error); });
        }
    })
});
