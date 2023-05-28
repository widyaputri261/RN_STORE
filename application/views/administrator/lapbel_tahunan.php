<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan Pembelian Tahunan</title>

    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo/favicon.png" type="image/x-icon">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" media="screen" type="text/css" href="<?= base_url(); ?>assets/css/colorpicker.css" />

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body id="page-top">
    <div class="col-12">
        <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="col-12">
                <h4>
                    <i class="fas fa-shopping-cart"></i> <?= $title ?>
                    <small class="float-right">Tahun: <?= $tahun ?></small>
                </h4>
            </div>
            <!-- info row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barang</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Qty</th>
                                <th>Total Harga</th>
                                <th>Supplier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $grand_total = 0;
                            foreach ($laporan as $key => $value) {
                                $tot_harga = $value->qty * $value->price_buy;

                                $grand_total = $grand_total + $tot_harga;
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->title ?></td>
                                    <td>Rp. <?= number_format($value->price_buy, 0) ?></td>
                                    <td>Rp. <?= number_format($value->price_sell, 0) ?></td>
                                    <td><?= $value->qty ?></td>
                                    <td>Rp. <?= number_format($tot_harga, 0) ?></td>
                                    <td><?= $value->nama ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <h3>Grand Total : Rp. <?= number_format($grand_total, 0) ?></h3>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <!-- <div class="row no-print">
            <div class="col-12">
                <button class="btn btn-info" onclick="window.print()"><i class="fas fa-print"></i> Print</a>

            </div>
        </div> -->
        </div>
        <!-- /.invoice -->
    </div>
    <script>
        window.print();
    </script>
</body>
</html>