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

    .table-up,
    th,
    td {
        border: 1px solid black;
        padding: 5px;


    }

    h1 {
        font-size: 5em;
        font-weight: 800;
    }

    .td-high {
        border: 1px solid black;

        padding-bottom: 120px;
        padding-right: 50px;
    }

    .table-up .th {
        text-align: center;
    }

    .timw {
        margin-left: 80px !important;
        margin-top: 20px !important;
    }

    .ttd1 {
        margin-left: 30px !important;
        margin-bottom: 100px !important;
        margin-top: 20px !important;

    }

    .ttd1-isi {

        margin-bottom: 100px !important;

    }

    .ttd2 {
        margin-left: 200px !important;
        margin-bottom: 100px !important;
        margin-top: 20px !important;

    }

    .ttd2-isi {

        margin-bottom: 100px !important;

    }

    .full-height {
        height: 100%;
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


    <section class="content" id="out_print">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <div class="row invoice-info">
                            <div class="col-sm-6 invoice-col">

                                <div class="timw">
                                    <h1>
                                        <em>
                                            'TIMW'
                                        </em>
                                    </h1>
                                </div>
                            </div>

                            <div class="col-sm-6 invoice-col">
                                <div class="font-weight-bold">
                                    PT TI Matsuoka Winner Industry
                                </div>
                                <div class="font-weight-normal">
                                    Head Office :
                                </div>
                                <div class="font-weight-normal">
                                    Summitmas II 3rd Fl. Jl. Jend. Sudirman kav 61-62 Jakarta 12190
                                </div>
                                <div class="font-weight-normal">
                                    Tel. (021) 520 1756 - Fax. (021) 520 1294
                                </div>
                                <div class="font-weight-normal">
                                    Factory :
                                </div>
                                <div class="font-weight-normal">
                                    Jl. Raya Tegalpanas Jimbaran Ds. Secang Rt. 01 Dsn. Samban
                                    Kec. Bawen Kab. Semarang Jawa Tengah
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <hr style="width:100%;text-align:left;margin-left:0" class="border border-dark">
                            </div>
                        </div>


                        <div class="text-center">
                            <h4 class="font-weight-bold">PURCHASE ORDER</h4>
                            <h6 class="font-weight-bold">NO : <?= $po['po_no']; ?></h6>
                        </div>
                        <!-- title row -->

                        <!-- info row -->
                        <?= form_open_multipart('Controller_Purchase/create'); ?>
                        <div class="row invoice-info mt-1">


                            <div class="container">
                                <input type="hidden" value="<?= $po['remark'] ?>" id="po_remark">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="m-0"><?= $po['supplier_attention'] ?></p>
                                        <p class="m-0 font-weight-bold"><?= $po['supplier_name'] ?></p>
                                        <p class="m-0"><?= $po['supplier_address'] ?></p>


                                        <p class="m-0">Phone &nbsp : <?= $po['supplier_phone'] ?></p>
                                        <p class="m-0">Fax &nbsp &nbsp &nbsp &nbsp : <?= $po['supplier_phone'] ?>
                                        </p>
                                        <p class="m-0">Attn &nbsp &nbsp &nbsp : <?= $po['supplier_attention'] ?>
                                        </p>
                                        <p class="m-0">email &nbsp &nbsp : <?= $po['supplier_email'] ?></p>
                                    </div>
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-2">
                                        <p class="m-0 text-center">Date &nbsp : &nbsp <?= $po['request_date'] ?></p>
                                    </div>
                                </div>
                            </div>


                            <!-- /.row -->

                            <div class="container mt-5">

                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="col-12">

                                            <div class="row">
                                                <div class="col-2">Request in house</div>
                                                <div class="col-1">:</div>
                                                <div class="col-7">
                                                    <p class="m-0"><?= $po['request_in_house'] ?></p>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-12 mb-3 border border-dark">

                                            <div class="row ">
                                                <div class="col-2">Your Quotation No</div>
                                                <div class="col-1">:</div>
                                                <div class="col-5">
                                                    <p class="m-0"></p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="m-0">Dated:</p>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-2">Delivery Point at</div>
                                                <div class="col-1">:</div>
                                                <div class="col-7">
                                                    <p class="m-0"><?= $po['delivery_at'] ?></p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-12">
                                                <div class="col-sm-12">
                                                    <table class="table-up ">
                                                        <tr class="po-item">
                                                            <th width="2%">No</th>
                                                            <th width="40%">Description of Goods</th>
                                                            <th width="5%">Size</th>
                                                            <th width="5%">Color</th>
                                                            <th width="5%">Unit</th>
                                                            <th width="10%">Qty Order</th>
                                                            <th width="14%">Unit Price</th>
                                                            <th width="40%">Total Price</th>
                                                        </tr>
                                                        <tbody>
                                                            <?php $i = 1; ?>
                                                            <?php foreach ($podetil as $p) : ?>
                                                                <tr>

                                                                    <td>
                                                                        <?= $i; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $p['item_code'] ?>- <?= $p['item_description'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $p['size_code'] ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?= $p['color'] ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?= $p['unit'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= number_format($p['qty'], 0, ',', '.') ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= number_format($p['item_price'], 0, ',', '.') ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= number_format($p['total_price'], 0, ',', '.') ?>
                                                                    </td>

                                                                </tr>

                                                                <?php $i++; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3 border border-dark mt-1">

                                            <div class="row ">
                                                <div class="col-2">Notes</div>
                                                <div class="col-1">:</div>
                                                <div class="col-9">
                                                    <p class="m-0"><?= $po['note1'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->


                                </div>
                                <div class="row mb-5">
                                    <!-- accepted payments column -->
                                    <div class="col-5 mt-5">

                                        <div class="form-group">
                                            <label class="font-weight-bold">Note</label>
                                            </br>
                                            <p>
                                                - Payment term is T/T 30 days after delivery
                                                </br>
                                                - Please send back after dully signed and stamped
                                                </br>
                                                - Goods to be delivered to the following address :
                                                </br>
                                                <label class="font-weight-bold"> PT. TI MATSUOKA WINNER INDUSTRY</label>
                                                </br>
                                                Jl. Raya Tegalpanas Jimbaran
                                                Ds. Secang RT. 01 Dsn. Samban
                                                Kec. Bawen Kab. Semarang, Jawa Tengah
                                                </br>

                                            <p><?= $po['note2'] ?></p>
                                            </br>
                                        </div>
                                    </div>

                                    <div class="col-2 mt-5">

                                    </div>
                                    <!-- /.col -->
                                    <div class="col-5">

                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <th style="width:50%">Sub total :</th>
                                                    <td>
                                                        <?= $po['sub_total'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Rounding :</th>
                                                    <td>
                                                        <?= $po['rounding'] ?>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th>
                                                        Vat (<?= $po['vat']; ?>%) :
                                                    </th>

                                                    <td id="tax_result">
                                                        <?= $po['vat_amount'] ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Grand Total:</th>
                                                    <td id="grand_total">
                                                        <?= $po['grand_total'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th id="purchase_amount">Purchase Amount:</th>
                                                    <td>
                                                        <?= $po['purchase_amount'] ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->



                                <div class="row invoice-info mt-5" id="paraf1">
                                    <div class="col-sm-6 invoice-col">

                                        <div class="ttd1">
                                            <div class="font-weight-normal">
                                                Issued by,
                                            </div>
                                            <div class="font-weight-normal ttd1-isi">
                                                PT. TI Matsuoka Winner Industry
                                            </div>


                                            <div class="font-weight-normal mt-5">
                                                Mr. Tadashi Miyamoto
                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-sm-6 invoice-col">

                                        <div class="ttd2">
                                            <div class="font-weight-normal">
                                                Confirmed by,
                                            </div>
                                            <div class="font-weight-normal ttd2-isi">
                                                QINGDAO LEESUN INTERNATIONAL TRADING CO., LTD
                                            </div>

                                            <hr style="width:50%;text-align:left;margin-left:0" class="border border-dark">
                                            <div class="font-weight-normal">
                                                Ms. Li
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="row invoice-info mt-5" id="paraf2">
                                    <div class="col-sm-2">


                                    </div>

                                    <div class="col-sm-10">

                                        <div class="ttd2">
                                            <table>
                                                <tr>
                                                    <th style="width:22%">Predident Director</th>
                                                    <th style="width:20%">Director</th>
                                                    <th style="width:20%">Manager</th>
                                                    <th style="width:22%">Head of Division</th>
                                                    <th style="width:25%">In Carge</th>
                                                </tr>

                                                <tr>
                                                    <td class="td-high"></td>
                                                    <td class="td-high"></td>
                                                    <td class="td-high"></td>
                                                    <td class="td-high"></td>
                                                    <td class="td-high"></td>
                                                </tr>

                                            </table>

                                        </div>

                                    </div>
                                </div>



                                <div class="row no-print mt-5">
                                    <div class="col-12">

                                        <a href="<?= base_url('Controller_Purchase') ?>" class="btn btn-success float-right">Back</a>

                                        <button class="btn btn-sm btn-flat btn-primary" id="print" type="button"><i class="fa fa-print"></i> Print</button>
                                        <!-- <a href="<?= base_url('Controller_Purchase/print_pdf/') . $po['id_po'] ?>"
                                            class="btn btn-primary float-right" style="margin-right: 5px;">Print</a> -->


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


<script>
    $(document).ready(function() {

        var a = $("#po_remark").val();
        if (a == 'Local') {
            $("#paraf2").hide();
            $("#paraf1").show();
        } else {
            $("#paraf1").hide();
            $("#paraf2").show();
        }

    });



    $(function() {
        $('#print').click(function(e) {
            e.preventDefault();

            var _h = $('head').clone()
            var _p = $('#out_print').clone()
            var _el = $('<div>')
            _el.append(_h)
            _el.append(_p)

            var nw = window.open("", "", "width=1200,height=950")
            nw.document.write(_el.html())
            nw.document.close()
            setTimeout(() => {
                nw.print()
                setTimeout(() => {

                    nw.close()
                }, 300);
            }, 200);
        })
    })
</script>