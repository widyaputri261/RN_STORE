<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pesanan <?= $invoice['nama']; ?> - <?= $invoice['invoice_code']; ?></title>

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

        .description-product-detail {
            color: #666;
        }

        .description-product-detail h2 {
            font-size: 22px;
        }

        .description-product-detail h3 {
            font-size: 19px;
        }

        .description-product-detail h4 {
            font-size: 17px;
        }

        .description-product-detail p {
            font-size: 14.5px;
        }

        .description-product-detail img {
            width: 50%;
        }
    </style>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body id="page-top">
    <?php echo $this->session->flashdata('upload'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1><?= $this->Settings_model->general()["app_name"]; ?></h1>
        <h4>Order ID <?= $invoice['invoice_code']; ?></h4>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="lead">Data Alamat</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td>Tanggal Pemesanan</td>
                                <td> : <?= $invoice['date_input']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Penerima</td>
                                <td> : <?= $invoice['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> : <?= $invoice['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td> : <?= $invoice['telp']; ?></td>
                            </tr>
                            <tr>
                                <td>Acara</td>
                                <td> : <?= $invoice['jenis_acara'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td>Tanggal/Waktu Acara</td>
                                <td> : <?= $invoice['date']; ?> <?= $invoice['time'] ?></td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td> : <?= $invoice['lokasi']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td style="width: 65%;"> : <?= $invoice['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>Kabupaten</td>
                                <td> : <?= $invoice['kabupaten']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <hr>
            </div>
        </div>
        <div class="card shadow mb-5">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody class="data-content">
                        <?php $no = 1; ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $invoice['paket']; ?></td>
                            <td>Rp <?= number_format($invoice['price'], 0, ",", "."); ?></td>

                        </tr>
                    </tbody>
                </table>
                <div class="col-md-6">
                    <table class="table table-borderless table-sm">
                        <tr>
                            <th>Total Harga</th>
                            <th>Rp <?= number_format($invoice['price'], 0, ",", "."); ?></th>
                        </tr>
                        <tr>
                            <th>Biaya Tambahan</th>
                            <th>Rp <?= number_format($invoice['biayaTambahan'], 0, ",", "."); ?></th>
                        </tr>
                        <tr>
                            <th>Total Keseluruhan</th>
                            <th>Rp <?= number_format($invoice['total'], 0, ",", "."); ?></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>