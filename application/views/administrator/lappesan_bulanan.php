<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan Pemesanan Bulanan</title>

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
                    <small class="float-right">Bulan: <?= $bulan ?>/<?= $tahun ?></small>
                </h4>
            </div>
            <!-- info row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Invoice Code</th>
                                <th>Paket</th>
                                <th>Price</th>
                                <th>Tanggal/Waktu Acara</th>
                                <th>Lokasi</th>
                                <th>Biaya Tambahan</th>
                                <th>Total All</th>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $grand_total = 0;
                            foreach ($laporan as $key => $value) {
                                $tot_harga = $value->price + $value->biaya_tambahan;

                                $grand_total = $grand_total + $tot_harga;
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->invoice_code ?></td>
                                    <td><?= $value->paket ?></td>
                                    <td>Rp. <?= number_format($value->price, 0) ?></td>
                                    <td><?= $value->date ?> <?= $value->time ?></td>
                                    <td><?= $value->lokasi?></td>
                                    <td>Rp. <?= number_format($value->biaya_tambahan, 0) ?></td>
                                    <td>Rp. <?= number_format($value->total, 0) ?></td>
                                    <td><?= $value->nama ?></td>
                                    <?php if ($value->status == '0') { ?>
										<td>Belum Selesai</td>
									<?php } else if ($value->status == '1') { ?>
										<td>Selesai</td>
									<?php } ?>
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