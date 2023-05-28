<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800">Order ID = <?= $invoice['invoice_code']; ?></h1>
    <?php if ($invoice['status'] == 1) { ?>
        <h3 class="text-success">Selesai</h3>
    <?php } else if ($invoice['status'] == 0) { ?>
        <p class="lead">Belum selesai</p>
    <?php } ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/orders_paket" class="btn btn-sm btn-primary"><i class="fa fa-chevron-left"></i> Kembali</a>
            <a href="<?= base_url(); ?>administrator/print_detail_order_paket/<?= $invoice['invoice_code']; ?>" class="btn btn-info btn-sm float-right">Print</a>
        </div>
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