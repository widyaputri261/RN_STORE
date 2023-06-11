<?php echo $this->session->flashdata('success'); ?>
<div class="wrapper">
    <?php include 'menu.php'; ?>
    <div class="core">
        <h2 class="title">Pesanan Anda</h2>
        <hr>
        <?php if ($transaction->num_rows() > 0) { ?>
            <table class="table table-bordered">
                <tr>
                    <th>Order ID</th>
                    <th>Tanggal Pesanan</th>
                    <th>Total Pembayaran</th>
                    <th>Status</th>
                    <th>#</th>
                </tr>
                <?php foreach ($transaction->result_array() as $d) : ?>
                    <tr>
                        <td><?= $d['invoice_code'] ?></td>
                        <td><?= $d['date_input'] ?></td>
                        <td>Rp <?= number_format($d['total_all'], 0, ",", "."); ?></td>
                        <?php if ($d['courier'] == "cod") { ?>
                            <td>Cash On Delivery</td>
                        <?php } else { ?>
                            <?php if ($d['pay_status'] == 'pending' || $d['pay_status'] == "") { ?>
                                <td>Belum dibayar</td>
                            <?php } else if ($d['status'] == 0 && $d['pay_status'] == 'settlement') { ?>
                                <td>Menunggu Konfirmasi</td>
                            <?php } else if ($d['status'] == 1) { ?>
                                <td>Telah dikonfirmasi</td>
                            <?php } else if ($d['status'] == 2) { ?>
                                <td>Sedang diproses</td>
                            <?php } else if ($d['status'] == 3) { ?>
                                <td>Sedang dikirim</td>
                            <?php } else if ($d['pay_status'] == 'expire') { ?>
                                <td>Pesanan Kadaluwarsa</td>
                            <?php } ?>
                        <?php } ?>
                        <td><small><a href="<?= base_url(); ?>profile/transaction/<?= $d['invoice_code']; ?>" class="text-info">Detail</a></small></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php } else { ?>
            <div class="alert alert-warning">Tidak ada pesanan. Yuk Belanja</div>
        <?php } ?>
    </div>
</div>