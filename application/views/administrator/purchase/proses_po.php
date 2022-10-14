<style>
    .form-control-xs {
        height: calc(1em + .375rem + 5px) !important;
        padding: .125rem .25rem !important;
        font-size: .75rem !important;
        line-height: 1.5;
        border-radius: .2rem;
    }

    .btn-xs {
        height: calc(1em + .375rem + 3px) !important;
        padding: .125rem .25rem !important;
        font-size: .75rem !important;
        line-height: 1.5;
        border-radius: .2rem;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">

                        <div class="text-center">
                            <h5 class="font-weight-bold"> TIMW PURCHASE ORDER</h5>
                        </div>
                        <!-- title row -->

                        <!-- info row -->
                        <?= form_open_multipart('Controller_Purchase/create'); ?>
                        <div class="row invoice-info mt-5">


                            <div class="container">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row mb-1">
                                            <label for="id_po" class="col-sm-4 col-form-label">PO Number</label>
                                            <div class="col-sm-5">
                                                <input type="hidden" class="form-control form-control-sm" id="id_po" name="id_po" required autofocus>

                                                <input type="text" class="form-control form-control-sm" id="po_no" name="po_no" placeholder="PO Number" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <label for="id_trim" class="col-sm-4 col-form-label">Trim Code</label>
                                            <div class="col-sm-5">
                                                <input type="hidden" class="form-control form-control-sm" id="id_trim" name="id_trim" value="<?= $trimx['id_trim'] ?>" required>

                                                <input type="text" class="form-control form-control-sm" id="trim_code" name="trim_code" placeholder="Trim Code" value="<?= $trimx['trim_code'] ?>" required readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label for="id_supplier" class="col-sm-4 col-form-label">Supplier</label>
                                            <div class="col-sm-5">
                                                <input type="hidden" class="form-control form-control-sm" id="id_supplier" name="id_supplier" required>
                                                <input type="text" class="form-control form-control-sm" id="supplier_name" name="supplier_name" placeholder="Supplier Detail" onclick="cari_supplier()" required>
                                            </div>
                                        </div>
                                        <div class=" form-group row mb-1">
                                            <label for="supplier_source" class="col-sm-4 col-form-label">Supplier
                                                Source</label>
                                            <div class="col-sm-5">
                                                <select class="form-control form-control-sm select2" name="supplier_source" id="supplier_source">
                                                    <option selected="selected" value="Local">Local</option>
                                                    <option value="Import">Import</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label for="delivery_at" class="col-sm-4 col-form-label">Delivery Point
                                                at</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" id="delivery_at" name="delivery_at" placeholder="Delivery Point at" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row mb-1">
                                            <label for="allocation" class="col-sm-4 col-form-label">Allocation</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" id="allocation" name="allocation" placeholder="allocation" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <label for="applicant" class="col-sm-4 col-form-label">Applicant</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control form-control-sm" id="applicant" name="applicant" placeholder="apllication name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <label for="reservationdate" class="col-sm-4 col-form-label">Req
                                                Date</label>
                                            <div class="col-sm-5">
                                                <!-- Date -->
                                                <div class="form-group">

                                                    <div class="input-group date input-group-sm" id="reservationdate" data-target-input="nearest">
                                                        <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdate" name="request_date" id="request_date" required />
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-1">
                                            <label for="reservationdate2" class="col-sm-4 col-form-label">Request in
                                                House</label>
                                            <div class="col-sm-5">
                                                <div class="form-group">

                                                    <div class="input-group date input-group-sm" id="reservationdate2" data-target-input="nearest">
                                                        <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdat2" name="request_in" id="request_in" required />
                                                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->

                                    </div>
                                </div>
                            </div>


                            <!-- /.row -->

                            <div class="container mt-5">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 mb-3">
                                            <button class="btn btn-danger delete btn-sm" id="removeRows" type="button">-
                                                Delete</button>
                                            <button class="btn btn-success btn-sm" id="addRows" type="button">+ Add
                                                More</button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="style" class="col-sm-1 col-form-label">Notes</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="note1" id="note1" class="form-control  form-control-xs" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-12">
                                                <div class="col-sm-12">
                                                    <table class="table table-bordered table-hover table-sm" style="width:100%" id="invoiceItem">
                                                        <tr class="po-item">
                                                            <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
                                                            <th width="15%">Code Item</th>
                                                            <th width="40%">Description</th>
                                                            <th width="10%">Price</th>
                                                            <th width="10%">Qty</th>
                                                            <th width="100%">Total Price</th>
                                                        </tr>
                                                        <tbody>
                                                            <tr>

                                                                <td><input class="itemRow" type="checkbox"></td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <input type="hidden" name="id_item[]" id="id_item_1">
                                                                        <input type="text" name="item_code[]" id="item_code_1" class="form-control  form-control-xs" autocomplete="off" onclick="cari_item()" required>

                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control  form-control-xs" id="item_detail" readonly>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control  form-control-xs" name="item_price[]" id="item_price_1" readonly>
                                                                </td>
                                                                <td>
                                                                    <input type="number" name="qty[]" id="qty_1" class="form-control  form-control-xs" autocomplete="off" onclick="klik0()" required>
                                                                </td>
                                                                <td class="total-prices" id="total_p"> <input type="number" name="total_price[]" id="total_price" class="form-control  form-control-xs" autocomplete="off" readonly></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->



                                </div>
                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-7 mt-5">
                                        <div class="form-group row">
                                            <label for="style" class="col-sm-1 col-form-label">Notes</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="3" name="note2" id="note2" placeholder="Enter notes here.."></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.col -->
                                    <div class="col-5">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm">
                                                <tr>
                                                    <th style="width:50%">Sub total :</th>
                                                    <td>
                                                        <input type="text" class="form-control col-sm-6 form-control-xs" name="sub_total" id="sub_total" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Rounding :</th>
                                                    <td>
                                                        <input type="text" class="form-control col-sm-6 form-control-xs" name="rounding" id="rounding">
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th>
                                                        Tax (%) :
                                                    </th>

                                                    <td id="tax_result">
                                                        <input type="text" class="form-control col-sm-6  form-control-xs" name="tax" id="tax">
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th>

                                                    </th>

                                                    <td id="tax_result">
                                                        <input type="text" class="form-control col-sm-6 form-control-xs" name="tax_end" id="tax_end" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Grand Total:</th>
                                                    <td id="grand_total">
                                                        <input type="text" class="form-control col-sm-6 form-control-xs" name="grand_total_end" id="grand_total_end" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th id="purchase_amount">Purchase Amount:</th>
                                                    <td>
                                                        <input type="text" class="form-control col-sm-6 form-control-xs" name="purchase_amount_end" id="purchase_amount_end" readonly>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <div class="row no-print">
                                    <div class="col-12">

                                        <a href="<?= base_url('Controller_Purchase/request_purchase') ?>" class="btn btn-success float-right">Back</a>
                                        <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Save
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </div>

                        </form>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<script text="text/javascript">
    function calculate() {
        var _total = 0
        $('.po-item').each(function() {
            var qty = $(this).find("[name='qty[]']").val()
            var unit_price = $(this).find("[name='item_price[]']").val()
            var row_total = 0;
            if (qty > 0 && unit_price > 0) {
                row_total = parseFloat(qty) * parseFloat(unit_price)
            }
            $(this).find("[name='total_price[]']").val(row_total)

        })

        $("[name='total_price[]']").each(function() {
            var _price = $(this).val()
            _price = _price.replace(/\,/gi, '')
            _total += parseFloat(_price)
        })

        $('#sub_total').val(parseFloat(_total).toLocaleString("en-US"))

        // $('.total-price').each(function(){
        // 	var _price = $(this).text()
        // 		_price = _price.replace(/\,/gi,'')
        // 		_total += parseFloat(_price)
        // })
        // var discount_perc = 0
        // if($('[name="discount_percentage"]').val() > 0){
        // 	discount_perc = $('[name="discount_percentage"]').val()
        // }
        // var discount_amount = _total * (discount_perc/100);
        // $('[name="discount_amount"]').val(parseFloat(discount_amount).toLocaleString("en-US"))
        var tax_perc = 0
        if ($('[name="tax"]').val() > 0) {
            tax_perc = $('[name="tax"]').val()
        }
        var tax_amount = _total * (tax_perc / 100);
        var grand = parseInt(_total) + parseInt(tax_amount);

        $('[name="tax_end"]').val(parseFloat(tax_amount).toLocaleString("en-US"))
        $('#grand_total_end').val(parseFloat(grand).toLocaleString("en-US"))
        $('#purchase_amount_end').val(parseFloat(grand).toLocaleString("en-US"))
    }

    $("#qty").keyup(function() {
        $("input").css("background-color", "pink");
    });

    $("#qty1_ok").keyup(function() {
        calculate();
    });
    $("#qty").keyup(function() {
        calculate();
    });

    $("[name='qty[]']").keyup(function() {
        calculate();
    });




    $(document).ready(function() {
        kd_otomatis();


        $(document).on('click', '#checkAll', function() {
            $(".itemRow").prop("checked", this.checked);
        });
        $(document).on('click', '.itemRow', function() {
            if ($('.itemRow:checked').length == $('.itemRow').length) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        });
        var count = $(".itemRow").length;

        $(document).on('click', '#addRows', function() {
            count++;
            var c = 'INI IDxx KE';
            var d = c + count++;
            console.log(d);

            var htmlRows = '';
            htmlRows += '<tbody>';
            htmlRows += '<tr class="po-item">';
            htmlRows += '<td> <input class="itemRow" type="checkbox"></td>';


            htmlRows +=
                '<td> <input type="hidden" name="id_item[]" id="id_item1_ok' + count +
                '" class="form-control form-control-xs" autocomplete="off" readonly> <div class="input-group"> <input type="text" name="item_code1[]" id="item_code1_ok' +
                count +
                '" class="form-control form-control-xs" autocomplete="off" onclick="cari_item_c2()" required> </div></td>';

            htmlRows += '<td>  <input type="text" name="item_source[]" id="item_detail_ok' + count +
                '" class="form-control form-control-xs" autocomplete="off" readonly> </td>';

            htmlRows += '<td>  <input type="text" name="item_price[]" id="item_price1_ok' + count +
                '" class="form-control form-control-xs" autocomplete="off" required readonly> </td>';

            htmlRows += '<td id="hehe">  <input type="number" name="qty[]" id="qty1_ok' + count +
                '" class="form-control form-control-xs" autocomplete="off" onclick="klik1()"> </td>';
            htmlRows += '<td >  <input type="number" name="total_price[]" id="total_price1_ok' + count +
                '" class="form-control form-control-xs" autocomplete="off" onclick="klik1()"> </td>';
            // htmlRows +=
            //     '<td class="total-price">0</td>';

            htmlRows += '</tr>';
            htmlRows += '</tbody>';
            $('#invoiceItem').append(htmlRows);



        });
        $(document).on('click', '#removeRows', function() {
            $(".itemRow:checked").each(function() {
                $(this).closest('tr').remove();
                calculate();
            });
            $('#checkAll').prop('checked', false);
            // calculateTotal();
        });


        $("#qty1_ok" + count).keypress(function() {
            console.log('hahaha');
            calculate();
        });

        $("#qty1_ok" + count).keyup(function() {
            console.log('hahaha');
            calculate();
        });
        $("#qty1_ok").keypress(function() {
            console.log('hahaha');
            calculate();
        });
        $("#qty_1").keypress(function() {
            console.log('hahaha');
            calculate();
        });


        // $("#item_code_1").focusout(function() {
        //     console.log("ini aku");
        //     var harga = $("#item_price_1").val();
        //     var jumlah = $("#qty_1").val();

        //     var total = parseInt(harga) * parseInt(jumlah);
        //     $("#total_price").val(total);
        // });


        // $("#item_code_1").click(function() {
        //     var harga = $("#item_price_1").val();
        //     var jumlah = $("#qty_1").val();

        //     var total = parseInt(harga) * parseInt(jumlah);
        //     $("#total_price").val(total);
        // });





        function kd_otomatis() {
            $.ajax({
                url: "<?php echo site_url('Controller_Purchase/kode_otomatis') ?>/",
                type: "GET",
                dataType: "JSON",
                success: function(data) {

                    $('[name="id_po"]').val(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });

        }



        $(document).on('click', '.pilih_code_c2', function(e) {

            var a = $(this).attr('data-nama');
            var b = $(this).attr('data-size');
            var c = $(this).attr('data-color');
            var d = $(this).attr('data-source');
            var e = $(this).attr('data-supplier');

            document.getElementById("id_item1_ok" + count).value = $(this).attr('data-id');
            document.getElementById("item_code1_ok" + count).value = $(this).attr('data-kode');
            document.getElementById("item_detail_ok" + count).value = a + " / " + b + " / " + c + " / " +
                d + " / " + e;
            document.getElementById("item_price1_ok" + count).value = $(this).attr('data-price');
            document.getElementById("qty1_ok" + count).value = $(this).attr('data-qty');

            calculate();


            $('#modal_form_item_c2').modal('hide');
        });





        $(document).on('click', '.pilih_code_c1', function(e) {
            var a = $(this).attr('data-nama');
            var b = $(this).attr('data-size');
            var c = $(this).attr('data-color');
            var d = $(this).attr('data-source');
            var e = $(this).attr('data-supplier');

            document.getElementById("id_item_1").value = $(this).attr('data-id');
            document.getElementById("item_code_1").value = $(this).attr('data-kode');
            document.getElementById("item_detail").value = a + " / " + b + " / " + c + " / " + d + " / " +
                e;
            document.getElementById("item_price_1").value = $(this).attr('data-price');
            document.getElementById("qty_1").value = $(this).attr('data-qty');
            // document.getElementById("supplier_name_1").value = $(this).attr('data-supplier');
            // document.getElementById("item_source_1").value = $(this).attr('data-source');


            var harga = $("#item_price_1").val();
            var jumlah = $("#qty_1").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total_price").val(total);

            calculate();



            $('#modal_form_item').modal('hide');
        });


        $(document).on('click', '.pilih_suppliers', function(e) {
            document.getElementById("id_supplier").value = $(this).attr('data-kode');

            document.getElementById("supplier_name").value = $(this).attr('data-nama');

            $('#modal-supplier').modal('hide');
        });


        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $("#example2").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        $("#example3").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false
        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');


        $(document).on('click', '.deleteInvoice', function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to remove this?")) {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    dataType: "json",
                    data: {
                        id: id,
                        action: 'delete_invoice'
                    },
                    success: function(response) {
                        if (response.status == 1) {
                            $('#' + id).closest("tr").remove();
                        }
                        calculate();
                    }
                });
            } else {
                return false;
            }
        });



    });



    $(document).ready(function() {
        $("#item_price_1, #qty_1").keyup(function() {
            var harga = $("#item_price_1").val();
            var jumlah = $("#qty_1").val();
            var total = parseInt(harga) * parseInt(jumlah);
            $("#total_price").val(total);
        });

        if ($("#qty_1").val() > 0) {
            var a = $("#qty_1").val();
            var b = $("#item_price_1").val();
            var c = parseInt(a) * parseInt(b);

            $("#total_price").val(c);
        }




    });
    $(document).ready(function() {
        $('#tax').val(0);
        $('#rounding').val(0);
        $("#tax, #tax_end").keyup(function() {
            calculate();
        });
    });

    // function klik3() {

    //     $("#tax, #tax_end").keyup(function() {
    //         console.log("ini aku");
    //         var harga = $("#item_price_1").val();
    //         var jumlah = $("#qty_1").val();

    //         var total = parseInt(harga) * parseInt(jumlah);
    //         $("#total_price").val(total);
    //     });
    // }

    // $(document).ready(function() {

    //     table = $('#example3').DataTable({
    //         "responsive": true,
    //         "autoWidth": false,


    //         "ajax": {
    //             url: '<?php echo site_url('Controller_Purchase/get_item') ?>',
    //             type: 'POST'
    //         }

    //     });
    // });


    // function get_item() {

    //     var id = $('#id_trim').val();

    //     var id_supplier = $('#id_supplier').val();

    //     console.log(id);
    //     console.log(id_supplier);


    //     table = $('#example3').DataTable({
    //         "responsive": true,
    //         "autoWidth": false,


    //         "ajax": {
    //             url: '<?php echo site_url('Controller_Purchase/get_data') ?>',
    //             type: 'POST',

    //         }

    //     });
    // }





    function klik0() {

        $("#item_price_1, #qty_1").keyup(function() {
            console.log("ini aku");
            var harga = $("#item_price_1").val();
            var jumlah = $("#qty_1").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total_price").val(total);
        });
    }



    function klik1() {

        console.log('halo ini klik');

        calculate();
    }


    function cari_item() {


        var a = $('#id_trim').val();
        var b = $('#id_supplier').val();

        $('#modal_form_item').modal('show'); // show bootstrap modal
        $('.modal-title').text('Search data'); // Set Title to Bootstrap modal title
    }


    function cari_item_c2() {
        $('#modal_form_item_c2').modal('show'); // show bootstrap modal
        $('.modal-title').text('Search dataxx'); // Set Title to Bootstrap modal title
    }

    function cari_supplier() {
        $('#modal-supplier').modal('show'); // show bootstrap modal
        $('.modal-title').text('Search data'); // Set Title to Bootstrap modal title
    }
</script>



<!-- Modal -->
<div class="modal fade" id="modal_form_item" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="table-responsive">
                        <table id="example3" class="table table-hover table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Section</th>
                                    <th>Supplier</th>
                                    <th>Currency</th>
                                    <th>Price</th>
                                    <th>Qty</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($itemtrim as $sm) : ?>
                                    <tr class="pilih_code_c1" data-id="<?= $sm['id_item'] ?>" data-kode="<?= $sm['item_code'] ?>" data-nama="<?= $sm['item_description'] ?>" data-source="<?= $sm['item_remark'] ?>" data-supplier="<?= $sm['supplier_name'] ?>" data-size="<?= $sm['size_code'] ?>" data-color="<?= $sm['color'] ?>" data-price="<?= $sm['item_price'] ?>" data-qty="<?= $sm['qty'] ?>">
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $sm['item_code']; ?></td>
                                        <td><?= $sm['item_description']; ?></td>
                                        <td><?= $sm['size_code']; ?></td>
                                        <td><?= $sm['color']; ?></td>
                                        <td><?= $sm['item_remark']; ?></td>
                                        <td><?= $sm['supplier_name']; ?></td>
                                        <td><?= $sm['currency']; ?></td>
                                        <td><?= $sm['item_price']; ?></td>
                                        <td><?= $sm['qty']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_form_item_c2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="table-responsive">
                        <table id="example2" class="table table-hover table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Section</th>
                                    <th>Supplier</th>
                                    <th>Currency</th>
                                    <th>Price</th>
                                    <th>Qty</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($itemtrim as $sm) : ?>
                                    <tr class="pilih_code_c2" data-id="<?= $sm['id_item'] ?>" data-kode="<?= $sm['item_code'] ?>" data-nama="<?= $sm['item_description'] ?>" data-source="<?= $sm['item_remark'] ?>" data-supplier="<?= $sm['supplier_name'] ?>" data-size="<?= $sm['size_code'] ?>" data-color="<?= $sm['color'] ?>" data-price="<?= $sm['item_price'] ?>" data-qty="<?= $sm['qty'] ?>">
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $sm['item_code']; ?></td>
                                        <td><?= $sm['item_description']; ?></td>
                                        <td><?= $sm['size_code']; ?></td>
                                        <td><?= $sm['color']; ?></td>
                                        <td><?= $sm['item_remark']; ?></td>
                                        <td><?= $sm['supplier_name']; ?></td>
                                        <td><?= $sm['currency']; ?></td>
                                        <td><?= $sm['item_price']; ?></td>
                                        <td><?= $sm['qty']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-supplier">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Supplier</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Supplier Name</th>
                            <th>Address</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($suppliers as $m) : ?>
                            <tr class="pilih_suppliers" data-kode="<?= $m['id_supplier'] ?>" data-nama="<?= $m['supplier_name'] ?>" data-alamat="<?= $m['supplier_address'] ?>">
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['supplier_name']; ?></td>
                                <td><?= $m['supplier_address']; ?></td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div class="modal fade" id="modal-trim">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Trim Code</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Trim Code</th>
                            <th>MO Number</th>
                            <th>Style</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($supplier as $m) : ?>
                            <tr class="pilih_trim" data-id="<?= $m['id_trim'] ?>" data-kode="<?= $m['trim_code'] ?>">
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['trim_code']; ?></td>
                                <td><?= $m['trim_mo']; ?></td>
                                <td><?= $m['trim_style']; ?></td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>