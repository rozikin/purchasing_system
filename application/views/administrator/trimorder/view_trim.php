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
                            <h4 class="font-weight-bold">TRIM ORDER</h4>
                            <h6 class="font-weight-bold">NO : <?= $trimx['trim_code']; ?></h6>
                        </div>
                        <!-- title row -->

                        <!-- info row -->
                        <?= form_open_multipart(); ?>
                        <div class="row invoice-info mt-1">


                            <div class="container mt-5">


                                <div class="row">
                                    <div class="col-sm-4">

                                        <p class="m-0">STYLE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <?= $trimx['trim_style'] ?></p>
                                        <p class="m-0">MO &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <?= $trimx['trim_mo'] ?></p>
                                        <p class="m-0">DESTINATION &nbsp &nbsp &nbsp : <?= $trimx['trim_destination'] ?>
                                        </p>

                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-0 text-left">Date &nbsp : &nbsp <?= $trimx['trim_date'] ?></p>
                                        <p class="m-0 text-left">Remark &nbsp : &nbsp <?= $trimx['remark'] ?></p>
                                    </div>

                                </div>
                            </div>


                            <!-- /.row -->

                            <div class="container mt-5 mb-5">

                                <div class="row">
                                    <div class="col-sm-12">




                                        <div class="row">
                                            <div class="col-12">
                                                <div class="col-sm-12">
                                                    <table class="table-up ">
                                                        <tr class="po-item">
                                                            <th width="2%">No</th>
                                                            <th width="10%">Code Item</th>
                                                            <th width="15%">Description</th>
                                                            <th width="5%">Size</th>
                                                            <th width="5%">Color</th>
                                                            <th width="5%">Source</th>
                                                            <th width="15%">Supplier</th>

                                                            <th width="5%">Qty</th>
                                                            <th width="10%">Remark</th>

                                                        </tr>
                                                        <tbody>
                                                            <?php $i = 1; ?>
                                                            <?php foreach ($trimdetil as $p) : ?>
                                                                <tr>

                                                                    <td>
                                                                        <?= $i; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $p['item_code'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $p['item_description'] ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?= $p['size_code'] ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?= $p['color'] ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?= $p['item_remark'] ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?= $p['supplier_name'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= number_format($p['qty'], 0, ',', '.') ?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?= $p['detail_remark'] ?>
                                                                    </td>


                                                                </tr>

                                                                <?php $i++; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
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